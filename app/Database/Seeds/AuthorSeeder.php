<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthorSeeder extends Seeder
{
	public function run()
	{
		// $this->db->table('author')->truncate();
		$author = [
					'name' => 'Antoine de Saint-Exupéry'
		];
		// $lastId = $this->db->insertID();
		// Using Query Builder
		$this->db->table('authors')->insert($author);
	}
}
