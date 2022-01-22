<?php

namespace App\Controllers;
use App\Models\FilmModel;
use App\Models\JadwalModel;
use App\Models\TransaksiModel;

class TransaksiController extends BaseController
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

    public function prosesTambah()
    {
        $this->transaksiModel->save([
			'order_user' => $this->request->getVar('user_id'),
			'order_film' => $this->request->getVar('film_id'),
			'order_jadwal' => $this->request->getVar('jadwal_id')
		]);

        return redirect()->to('/order-tiket/'.$this->request->getVar('user_id'));
    }
}
