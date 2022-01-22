<?php

namespace App\Controllers;
use App\Models\UserModel;

class UserController extends BaseController
{
    protected $userModel;

    public function __construct(){
		$this->session = service('session');
		$this->userModel = new UserModel();
    }

	public function hapusData($id)
	{
		if ($this->userModel->delete($id)){
			return redirect()->to('/data-user');
		}
	}
}
