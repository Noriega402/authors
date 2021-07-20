<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Book extends Migration
{
        public function up()
        {
                $this->db->disableForeignKeyChecks();
                $this->forge->addField([
                        'id_book'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'title_book'       => [
                                'type'       => 'VARCHAR',
                                'constraint' => '70',
                                'null' => false,
                        ],
                        'description_book' => [
                                'type' => 'TEXT',
                                'null' => false,
                        ],
                        'author'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
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
                $this->forge->addKey('id_book', true);
                $this->forge->addForeignKey('author', 'authors', 'id_author', 'CASCADE', 'CASCADE');
                $this->forge->createTable('books');
                $this->db->enableForeignKeyChecks();
        }

        public function down()
        {
                $this->forge->dropTable('books');
        }
}
