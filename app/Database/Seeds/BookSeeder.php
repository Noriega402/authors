<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BookSeeder extends Seeder
{
	public function run()
	{
		// $this->db->table('books')->truncate();
		$book = [
					'title_book' => 'El principito',
					'description_book'    => 'Un niño curioso con un zorro como mascota, se lanza hacia la avetura'
			];

		// Using Query Builder
		$this->db->table('books')->insert($book);
	}
}