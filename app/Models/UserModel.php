<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    public function getUsers($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->find($id);
    }
}