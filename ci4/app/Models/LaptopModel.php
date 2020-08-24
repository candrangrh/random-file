<?php namespace App\Models;

use CodeIgniter\Model;

class LaptopModel extends Model
{
  protected $table      = 'laptop';
  protected $useTimestamps = true;
  protected $allowedFields = ['nama', 'gambar', 'slug'];
  protected $updatedField  = 'update_at';

  public function getLaptop($slug = false)
  {
    if ($slug == '') {
      return $this->findAll();
    }
    
    return $this->where(['slug' => $slug])->first();

  }
}
