<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Author extends Migration
{
        public function up()
        {
                $this->forge->addField([
                        'id_author'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'name'       => [
                                'type'       => 'VARCHAR',
                                'constraint' => '60',
                                'null' => false,
                        ],
                        'create_at' => [
                                'type' => 'DATETIME',
                                'null' => false,
                        ],
                        'update_at' => [
                                'type' => 'DATETIME',
                                'null' => true,
                        ],
                ]);
                $this->forge->addKey('id_author', true);
                $this->forge->createTable('authors');
        }

        public function down()
        {
                $this->forge->dropTable('authors');
        }
}
