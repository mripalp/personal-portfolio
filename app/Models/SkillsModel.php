<?php

namespace App\Models;

use CodeIgniter\Model;

class SkillsModel extends Model
{
  protected $table = 'skills';

  public function getAllTools()
  {
    return $this->db->table($this->table)
      ->get()
      ->getResultArray();
  }
}
