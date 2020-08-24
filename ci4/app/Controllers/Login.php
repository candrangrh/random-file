<?php namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
  public function index(){
    $data = [
      'title' => 'Halaman Login'
    ];
    return view('login',$data);
  }

  public function login(){
    $m = new LoginModel();

    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $cek = $m->get_data($username,$password);
    dd($cek);
    if (($cek['username'] == $username) && ($cek['password'] == $password))
    {
      session()->set('username', $cek['username']);
      session()->set('nama', $cek['nama']);
      session()->set('id', $cek['id']);
      return redirect()->to('/Pages');
    } else {
      return redirect()->to('/login');
    }

  }
}
