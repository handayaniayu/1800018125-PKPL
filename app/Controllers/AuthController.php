<?php

namespace App\Controllers;
use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $userModel;

    public function __construct(){
		$this->session = service('session');
		$this->userModel = new UserModel();
	}

    public function login()
    {
        $data = [
            'title' => 'Login | Bioskopi'
        ];

        return view('auth/v_login', $data);
    }

    public function prosesLogin()
	{
        // validasi input
		if (!$this->validate([
			'username' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Silahkan isi username anda.'
				]
            ],
            'password' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Password tidak boleh kosong.'
				]
            ]
		])) {
			$validation = \Config\Services::validation();
			$data = $validation->getErrors();
			return redirect()->to('/login')->withInput()->with('validation', $validation->getErrors());
		}

		$user = $this->userModel->asObject()->where('username', $this->request->getVar('username'))->first();
		if ($user) {
			if (md5($this->request->getVar('password')) == $user->password) {
				session()->set([
					'id' => $user->user_id,
					'username'  => $user->username,
                    'level' => $user->role,
					'logged_in' => TRUE
				]);

                if($user->role == 'admin'){
                    return redirect()->to('/admin');
                }else{
                    return redirect()->to('/');
                }
			}
            return redirect()->back()->withInput()->with('error_pass', 'Password salah!');
		}else{
			return redirect()->back()->withInput()->with('error', 'Username atau Password salah!');
		}
	}

	public function logout()
	{
		session_destroy();
		return redirect()->to('/login');

	}

	public function registrasi()
    {
        $data = [
            'title' => 'Registrasi | Bioskopi'
        ];

        return view('auth/v_registrasi', $data);
    }

	public function prosesRegistrasi()
	{
		if (!$this->validate([
			'username' => [
				'rules' => 'required|is_unique[user.username]|alpha_numeric',
				'errors' => [
					'required' => 'Username tidak boleh kosong',
					'is_unique' => 'Username sudah terdaftar.'
				]
            ],
            'password'	 	=> [
				'rules' => 'required|min_length[8]',
				'errors' => [
					'required' => 'Password tidak boleh kosong',
					'min_length' => 'Password tidak boleh kurang dari 8 karakter'
				],
			],
			'password1' 	=> [
				'rules' => 'required|matches[password]',
				'errors' => [
					'required' => 'Password konfirmasi tidak boleh kosong',
					'matches' => 'Password tidak sesuai'
				],
			]
		])) {
			$validation = \Config\Services::validation();
			$data = $validation->getErrors();
			return redirect()->to('/registrasi')->withInput()->with('validation', $validation->getErrors());
		}

		$this->userModel->save([
			'username' => $this->request->getVar('username'),
			'password' => md5($this->request->getVar('password')),
			'role' => 'user'
		]);

		return redirect()->to('/login');
	}
}
