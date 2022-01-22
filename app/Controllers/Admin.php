<?php

namespace App\Controllers;
use App\Models\FilmModel;
use App\Models\UserModel;
use App\Models\GenreModel;
use App\Models\JadwalModel;
use App\Models\TransaksiModel;

class Admin extends BaseController
{
    protected $filmModel;
    protected $userModel;
    protected $genreModel;
    protected $jadwalModel;
    protected $transaksiModel;

    public function __construct(){
		$this->session = service('session');
		$this->filmModel = new FilmModel();
        $this->userModel = new UserModel();
        $this->genreModel = new GenreModel();
        $this->jadwalModel = new JadwalModel();
        $this->transaksiModel = new TransaksiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin | Bioskopi'
        ];

        return view('admin/v_index', $data);
    }

    public function film()
    {
        $film = $this->filmModel->join('genre', ' genre.genre_id = film.film_genre')->findAll();

        $data = [
            'title' => 'Data Film | Bioskopi',
            'film' => $film,
        ];

        return view('admin/v_film', $data);
    }

    public function tambahFilm()
    {
        $genre = $this->genreModel->findAll();

        $data = [
            'title' => 'Tambah Film | Bioskopi',
            'genre' => $genre
        ];

        return view('admin/v_tambah-film', $data);
    }

    public function editFilm($id)
    {
        $film = $this->filmModel->where('film_id', $id)->first();
        $genre = $this->genreModel->findAll();

        $id_genre = $film['film_genre'];
        $genre_lama = $this->genreModel->where('genre_id', $id_genre)->first();

        $data = [
            'title' => 'Edit Film | Bioskopi',
            'genre' => $genre,
            'genre_lama' => $genre_lama,
            'film' => $film
        ];

        return view('admin/v_edit-film', $data);
    }

    public function user()
    {
        $user = $this->userModel->where('role', 'user')->findAll();

        $data = [
            'title' => 'Data User | Bioskopi',
            'user' => $user,
        ];

        return view('admin/v_user', $data);
    }

    public function genre()
    {
        $genre = $this->genreModel->findAll();

        $data = [
            'title' => 'Data genre | Bioskopi',
            'genre' => $genre,
        ];

        return view('admin/v_genre', $data);
    }

    public function tambahGenre()
    {
        $data = [
            'title' => 'Tambah Genre| Bioskopi'
        ];

        return view('admin/v_tambah-genre', $data);
    }

    public function editGenre($id)
    {
        $genre = $this->genreModel->where('genre_id', $id)->first();

        $data = [
            'title' => 'Edit Genre| Bioskopi',
            'genre' => $genre
        ];

        return view('admin/v_edit-genre', $data);
    }

    public function Jadwal($id)
    {
        $film = $this->filmModel->where('film_id', $id)->first();
        $jadwal_film = $this->jadwalModel->where('jadwal_film', $film['film_id'])->findAll();

        $data = [
            'title' => 'Jadwal Film | Bioskopi',
            'film' => $film,
            'jadwal_film' => $jadwal_film
        ];

        return view('admin/v_jadwal-film', $data);
    }

    public function tambahJadwal($id)
    {
        $data = [
            'title' => 'Tambah Jadwal | Bioskopi',
            'film_id' => $id
        ];

        return view('admin/v_tambah-jadwal', $data);
    }

    public function order()
    {
        $tiket = $this->transaksiModel->join('user', 'user_id = order_user')
                                        ->join('film', 'film_id = order_film')
                                        ->join('jadwal', 'jadwal_id = order_jadwal')
                                        ->findAll();
        $data = [
            'title' => 'Tiket | Bioskopi',
            'tiket' => $tiket,
        ];

        return view('admin/v_order', $data);
    }
}
