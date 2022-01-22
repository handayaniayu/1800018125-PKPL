<?php

namespace App\Controllers;
use App\Models\FilmModel;
use App\Models\JadwalModel;
use App\Models\TransaksiModel;

class Home extends BaseController
{
    protected $filmModel;
    protected $jadwalModel;
    protected $transaksiModel;

    public function __construct(){
		$this->session = service('session');
		$this->filmModel = new FilmModel();
        $this->jadwalModel = new JadwalModel();
        $this->transaksiModel = new TransaksiModel();
    }

    public function index()
    {
        $film_1 = $this->filmModel->join('genre', ' genre.genre_id = film.film_genre')->orderBy('film_id', 'DESC')->first();
        $film = $this->filmModel->findAll();
        
        $jadwal_film = $this->jadwalModel->where('jadwal_film', $film_1['film_id'])->findAll();

        $data = [
            'title' => 'Home | Bioskopi',
            'film_1' => $film_1,
            'film' => $film,
            'jadwal_film' => $jadwal_film
        ];

        return view('v_index', $data);
    }

    public function detailFilm($id)
    {
        $film = $this->filmModel->join('genre', ' genre.genre_id = film.film_genre')->where('film_id', $id)->orderBy('film_id', 'DESC')->first();

        $jadwal_film = $this->jadwalModel->where('jadwal_film', $film['film_id'])->findAll();

        $data = [
            'title' => $film['film_nama'].' | Bioskopi',
            'film' => $film,
            'jadwal_film' => $jadwal_film
        ];

        return view('v_detail-film', $data);
    }

    public function order($id)
    {
        $tiket = $this->transaksiModel->join('user', 'user_id = order_user')
                                        ->join('film', 'film_id = order_film')
                                        ->join('jadwal', 'jadwal_id = order_jadwal')
                                        ->where('user_id', $id)
                                        ->findAll();
        $data = [
            'title' => 'Tiket | Bioskopi',
            'tiket' => $tiket,
        ];

        return view('v_order-tiket', $data);
    }

    public function cariFilm()
    {
        $keyword = $this->request->getVar('keyword');

        $film_1 = $this->filmModel->join('genre', ' genre.genre_id = film.film_genre')->orderBy('film_id', 'DESC')->first();
        $film = $this->filmModel->like('film_nama', $keyword)->findAll();
        
        $jadwal_film = $this->jadwalModel->where('jadwal_film', $film_1['film_id'])->findAll();

        $data = [
            'title' => 'Home | Bioskopi',
            'film_1' => $film_1,
            'film' => $film,
            'jadwal_film' => $jadwal_film
        ];

        return view('v_index', $data);
    }
}
