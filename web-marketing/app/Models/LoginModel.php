<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
  protected $table  = 'login';

  public function get_login($username, $password) {
    return  $this->db->table('login')
    ->where(array('username' => $username, 'password' => $password))
    ->get()->getRowArray();
  }

}
