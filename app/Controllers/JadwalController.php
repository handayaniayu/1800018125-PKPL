<?php

namespace App\Controllers;
use App\Models\JadwalModel;

class JadwalController extends BaseController
{
    protected $jadwalModel;

    public function __construct(){
		$this->session = service('session');
		$this->jadwalModel = new JadwalModel();
    }

    public function prosesTambah()
    {
        if (!$this->validate([
			'tanggal' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'tanggal tidak boleh kosong',
				]
            ],
			'jam' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'jam tidak boleh kosong',
				]
            ],
			'harga' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'harga tidak boleh kosong',
				]
            ],
		])) {
			$validation = \Config\Services::validation();
			$data = $validation->getErrors();
			return redirect()->to('/tambah-jadwal/'.$this->request->getVar('id_film'))->withInput()->with('validation', $validation->getErrors());
		}

		$this->jadwalModel->save([
			'jadwal_film' => $this->request->getVar('id_film'),
			'jadwal_tanggal' => $this->request->getVar('tanggal'),
			'jadwal_jam' => $this->request->getVar('jam'),
			'jadwal_harga' => $this->request->getVar('harga'),
		]);

		return redirect()->to('/jadwal/'.$this->request->getVar('id_film'));
    }

	public function hapusData($id)
	{
		if ($this->jadwalModel->delete($id)){
			return redirect()->to('/data-film');
		}
	}
}

