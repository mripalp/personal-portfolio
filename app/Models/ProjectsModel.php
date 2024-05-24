<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectsModel extends Model
{
    protected $table = 'projects';

    public function getAll()
    {
        return $this->db->table($this->table)
            ->get()
            ->getResultArray();
    }
}
