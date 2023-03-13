<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFavorite extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'comic_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('user_id','users','id');
        $this->forge->addForeignKey('comic_id','comics','id');
        $this->forge->createTable('favorites');
    }

    public function down()
    {
        $this->forge->dropTable('favorites');
    }
}
