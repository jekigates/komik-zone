<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'      => 'Jeki Gates',
                'email'     => 'jekigates2004@gmail.com',
                'password'  => password_hash('akunuser', PASSWORD_DEFAULT),
                'role'      => 'user',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name'      => 'Jane Doe',
                'email'     => 'janedoe@example.com',
                'password'  => password_hash('password456', PASSWORD_DEFAULT),
                'role'      => 'user',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name'      => 'Admin',
                'email'     => 'admin@gmail.com',
                'password'  => password_hash('akunadmin', PASSWORD_DEFAULT),
                'role'      => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];

        $this->db->table('users')->insertBatch($data);
    }
}