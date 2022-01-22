<?php

namespace App\Controllers;
use App\Models\GenreModel;

class GenreController extends BaseController
{
    protected $genreModel;

    public function __construct(){
		$this->session = service('session');
		$this->genreModel = new GenreModel();
    }

    public function prosesTambah()
    {
        if (!$this->validate([
			'nama' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'nama tidak boleh kosong',
				]
            ],
		])) {
			$validation = \Config\Services::validation();
			$data = $validation->getErrors();
			return redirect()->to('/tambah-genre')->withInput()->with('validation', $validation->getErrors());
		}

		$this->genreModel->save([
			'genre_nama' => $this->request->getVar('nama'),
		]);

		return redirect()->to('/data-genre');
    }

	public function hapusData($id)
	{
		if ($this->genreModel->delete($id)){
			return redirect()->to('/data-genre');
		}
	}

	public function prosesEdit()
	{
		if (!$this->validate([
			'nama' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'nama tidak boleh kosong',
				]
            ],
		])) {
			$validation = \Config\Services::validation();
			$data = $validation->getErrors();
			return redirect()->to('/edit-genre/'.$this->request->getVar('id'))->withInput()->with('validation', $validation->getErrors());
		}

		$this->genreModel->save([
			'genre_id' => $this->request->getVar('id'),
			'genre_nama' => $this->request->getVar('nama'),
		]);

		return redirect()->to('/data-genre');
	}
}
