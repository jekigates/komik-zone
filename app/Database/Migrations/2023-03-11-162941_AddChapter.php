<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddChapter extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'comic_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => false,
            ],
            'number' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => false,
            ],
            'total_pages' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('comic_id', 'comics', 'id');
        $this->forge->createTable('chapters');
    }

    public function down()
    {
        $this->forge->dropTable('chapters');
    }
}
