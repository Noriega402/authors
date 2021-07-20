<?php
    namespace App\Controllers;

use App\Models\AuthorModel;
use App\Models\BookModel;

class Book extends BaseController
{
	public function inicio()
	{
		$data = ['titulo' => 'Inicio'];
		$vistas = view('Books/header', $data) .
			view('Books/menu') .
			view('Books/inicio') .
			view('Books/footer');
		return $vistas;
	}

	public function book()
	{
        /* $bookModel = new BookModel();
        $book = $bookModel->findAll();
        d($book); */

		$libros = new BookModel();
		$results = $libros->mostrarLibros();
		$results = ['value' => $results];

		$authors = new AuthorModel();
		$request = $authors->mostrarAutor();
		$request = ['value' => $request];
		// d($results);
		$data = ['titulo' => 'Books'];

		$vistas = view('Books/header', $data).
			view('Books/menu').
			view('Books/frmBook', $request).
			view('Books/tableBooks', $results).
			view('Books/footer');
		return $vistas;
	}

	public function createBook(){
		// $datos = [$_POST];
		print_r($_POST);
		$datos = [
			'title_book' => $_POST['titleBook'],
			'description_book' => $_POST['description']	,
			'author' => $_POST['author'],
		];

		$newBook = new BookModel();
		$resultado = $newBook->insertar($datos);

		return redirect()->to(base_url().'/Books');
	}

	public function getBook($idBook){
		// print_r($_POST);
		$title = ['titulo' => 'Update Book Data'];
		$data = ['id_book' => $idBook];
		// print_r($data);
		$book = new BookModel();
		$author = new AuthorModel();

		$requestBook = $book->obtenerLibro($data);
		// $resultAuthor = ['id_author' => $requestBook[0]['author']];
		// $requestAuthor = $author->obtenerAutor($resultAuthor);
		$requestAuthor = $author->mostrarAutor();
		// print_r($requestBook);
		// print_r($requestAuthor);
		$array = [
			'book' => $requestBook,
			'author' => $requestAuthor,
		];
		// print_r($array);
		$vistas = view('Books/header',$title).
		view('Books/frmUpdate',$array).
		view('Books/footer');
		return $vistas;
	}

	public function update(){
		print_r($_POST);
		$data = [
			'id_book' => $_POST['idBook'],
			'title_book' => $_POST['title_book'],
			'description_book' => $_POST['description'],
			'author' => $_POST['author'],
		];

		$idBook = $_POST['idBook'];
		$search = new BookModel();
		$search->actualizar($data, $idBook);

		return redirect()->to(base_url().'/Books');
	}
}