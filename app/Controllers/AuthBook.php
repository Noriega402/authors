<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthorModel;
use App\Models\BookModel;

class AuthBook extends BaseController
{
	public function index()
	{
		$title = ['titulo' => 'Authors and their books'];
		$libros = new BookModel();
		$result = $libros->authorBook();
		$result = ['value' => $result];
		// d($result);
		$vistas = view('Author_Book/header', $title).
		view('Author_Book/menu').
		view('Author_Book/tableMaster', $result).
		view('Author_Book/footer');

		return $vistas;
	}
}
