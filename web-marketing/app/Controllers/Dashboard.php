<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Dashboard extends BaseController
{
  public function __construct(){
    if(session()->get('username')==''){
      redirect()->to('/login');
    }
  }

  public function index()
  {
    if(session()->get('username')==''){
      return redirect()->to('/login');
    }
  
      $data = ['title' => 'Halaman Dashboard'];
      echo view('layout/head', $data);
      echo view('dashboard');
      echo view('layout/footer');

  }
}
?>
