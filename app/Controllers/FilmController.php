<?php

namespace App\Controllers;
use App\Models\FilmModel;

class FilmController extends BaseController
{
    protected $filmModel;

    public function __construct(){
		$this->session = service('session');
		$this->filmModel = new FilmModel();
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
            'tahun' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'tahun tidak boleh kosong',
				]
            ],
            'genre' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'genre tidak boleh kosong',
				]
            ],
            'trailer' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'trailer tidak boleh kosong',
				]
            ],
            'sinopsis' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'sinopsis tidak boleh kosong',
				]
            ],
		])) {
			$validation = \Config\Services::validation();
			$data = $validation->getErrors();
			return redirect()->to('/tambah-film')->withInput()->with('validation', $validation->getErrors());
		}

        $fileposter = $this->request->getFile('poster');
		// dd($fileposter);
        $namaposter = $fileposter->getRandomName();
        $fileposter->move('image', $namaposter);

        $filesampul = $this->request->getFile('sampul');

        $namasampul = $filesampul->getRandomName();
        $filesampul->move('image', $namasampul);

		$this->filmModel->save([
			'film_nama' => $this->request->getVar('nama'),
            'film_tahun' => $this->request->getVar('tahun'),
            'film_trailer' => $this->request->getVar('trailer'),
            'film_sinopsis' => $this->request->getVar('sinopsis'),
            'film_poster' => $namaposter,
            'film_sampul' => $namasampul,
			'film_genre' => $this->request->getVar('genre'),
		]);

		return redirect()->to('/data-film');
    }

	public function hapusData($id)
	{
		if ($this->filmModel->delete($id)){
			return redirect()->to('/data-film');
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
            'tahun' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'tahun tidak boleh kosong',
				]
            ],
            'genre' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'genre tidak boleh kosong',
				]
            ],
            'trailer' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'trailer tidak boleh kosong',
				]
            ],
            'sinopsis' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'sinopsis tidak boleh kosong',
				]
            ],
		])) {
			$validation = \Config\Services::validation();
			$data = $validation->getErrors();
			return redirect()->to('/edit-film/'.$this->request->getVar('id'))->withInput()->with('validation', $validation->getErrors());
		}

		$poster = $this->request->getVar('poster_lama');
		if(is_uploaded_file($this->request->getFile('poster'))){
			$fileposter = $this->request->getFile('poster');
			
			$namaposter = $fileposter->getRandomName();
			$fileposter->move('image', $namaposter);

			$poster = $namaposter;
		}

		$sampul = $this->request->getVar('sampul_lama');
		if(is_uploaded_file($this->request->getFile('sampul'))){
			$filesampul = $this->request->getFile('sampul');

			$namasampul = $filesampul->getRandomName();
			$filesampul->move('image', $namasampul);

			$sampul = $namasampul;
		}

		$this->filmModel->save([
			'film_id' => $this->request->getVar('id'),
			'film_nama' => $this->request->getVar('nama'),
            'film_tahun' => $this->request->getVar('tahun'),
            'film_trailer' => $this->request->getVar('trailer'),
            'film_sinopsis' => $this->request->getVar('sinopsis'),
            'film_poster' => $poster,
            'film_sampul' => $sampul,
			'film_genre' => $this->request->getVar('genre'),
		]);

		return redirect()->to('/data-film');
    }
}
