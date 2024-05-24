<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
  protected $table = 'profile'; // Sesuaikan dengan nama tabel yang Anda gunakan
  protected $allowedFields = ['name', 'about', 'skill', 'phone', 'email']; // Kolom yang diizinkan untuk diambil

  // Read name column from fafr table, where id = 1, and convert it to a string


  public function getName()
  {
    return $this->select('name')
      ->first();
  }

  public function getAbout()
  {
    return $this->select('about')
      ->first();
  }

  public function getSkills()
  {
    return $this->select('skills')
      ->first();
  }

  public function getPhone()
  {
    return $this->select('phone')
      ->first();
  }

  public function getEmail()
  {
    return $this->select('email')
      ->first();
  }



  public function getIntroduction()
  {
    return $this->asArray()
      ->where(['id' => 1])
      ->first();
  }
}
