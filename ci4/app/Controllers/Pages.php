<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
    $data = [
      'title' => 'Home | Candra Nugraha'
    ];
	   return view('home',$data);
	}

  public function about()
  {
    $data = [
      'title' => 'About | Candra Nugraha'
    ];
     return view('about',$data);
  }
}
