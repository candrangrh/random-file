<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{

  public function index()
  {
    $data = ['title' => 'Login'];
    echo view('layout/head', $data);
    echo view('login');
    echo view('layout/footer');
  }

  public function AksiLogin()
  {
    $modellogin = new LoginModel();

    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $cek = $modellogin->get_login($username, $password);
    if( ($cek['username'] == $username) && ($cek['password'] == $password) ){
      session()->set('username', $cek['username']);
      return redirect()->to('/dashboard');
    } else {
      session()->setFlashdata('pesan', 'Username atau Password yang dimasukkan Salah');
      return redirect()->to('/login');
    }


  }

  public function logout(){
    session()->remove('username');
    session()->setFlashdata('pesan', 'berhasil logout');
    return redirect()->to('/login');
  }
  //--------------------------------------------------------------------

}
