<?php

namespace App\Controllers;

use App\Models\AuthorModel;

class Author extends BaseController
{
    public function index(){
        $libros = new AuthorModel();
        $result = $libros->mostrarAutor();
        $mensaje = session('condicion');
        $result = [
            'value' => $result,
            'condicion' => $mensaje
        ];
        $data = ['titulo' => 'Authors'];
        $vistas = view('Authors/header', $data) .
        view('Authors/menu') .
        view('Authors/inicio') .
        view('Authors/frmAuthor') .
        view('Authors/tableAuthor', $result);

        return $vistas;
    }

    public function createAuthor(){
        // print_r($_POST); PARA VERIFICAR SI LOS DATOS SE MANDAN DE FORMA CORRECTA
        $datos = [ 'name' => $_POST['author'] ];

        // Insertar los datos del autor
        $array = new AuthorModel();
        // $array->insertar($datos);
        $respuesta = $array->insertar($datos);

        // redireccionar la pagina
		// redirecciona a la pagina principal del proyecto
		if($respuesta > 0){
			// redirecciona a la pagina principal del proyecto
			return redirect()->to(base_url().'/Authors')->with('condicion','1');
		}else{
			return redirect()->to(base_url().'/Authors')->with('condicion','2');
		}
    }

    public function getAuthor($idAuthor){
        $title = ['titulo' => 'Update Author Data'];
        $data = ['id_author' => $idAuthor];
        $result = new AuthorModel();
        $request = $result->obtenerAutor($data);
        $array = ['author' => $request];
        // return print_r($array);
        $vistas = view('Authors/header',$title).
        view('Authors/frmUpdate', $array).
        view('Authors/footer');

        return $vistas;
    }

    public function update(){
        $data = [
            'id_author' => $_POST['idAuthor'],
            'name' => $_POST['name']
        ];

        $id = $_POST['idAuthor'];
        $result = new AuthorModel();
        $request = $result->actualizar($data,$id);

        if($request){
			// redirecciona a la pagina principal del proyecto
			return redirect()->to(base_url().'/Authors')->with('condicion','3');
		}else{
			return redirect()->to(base_url().'/Authors')->with('condicion','4');
		}
    }

    public function delete($id){
        $data = [ 'id_author' => $id];
        $array = new AuthorModel();
        $result = $array->eliminar($data);

        if($result){
			// redirecciona a la pagina principal del proyecto
			return redirect()->to(base_url().'/Authors')->with('condicion','5');
		}else{
			return redirect()->to(base_url().'/Authors')->with('condicion','6');
		}
    }

    public function truncate(){
        $author = new AuthorModel();
        $request = $author->vaciarTabla();

        if($request){
			// redirecciona a la pagina principal del proyecto
			return redirect()->to(base_url().'/Authors')->with('condicion','7');
		}else{
			return redirect()->to(base_url().'/Authors')->with('condicion','8');
		}
    }
}