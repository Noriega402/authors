<?php

namespace App\Models;

use App\Controllers\Book;
use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table      = 'books';
    protected $primaryKey = 'id_book';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['title_book', 'description_book', 'author'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function mostrarLibros()
    {
        $query = $this->db->query("SELECT books.id_book, books.title_book, books.description_book FROM books");
        return $query->getResult();
    }

    public function insertar($datos){
        $book = $this->db->table('books');
        $book->insert($datos);
    }

    public function obtenerLibro($data){
        $book = $this->db->table('books');
        $book->where($data);

        return $book->get()->getResultArray();
    }

    public function actualizar($datos, $id){
        $book = $this->db->table('books');
        $book->set($datos);
        $book->where('id_book', $id);

        return $book->update();
    }

    public function authorBook(){
        $query = $this->db->query("SELECT books.id_book, books.title_book, authors.id_author, authors.name as nameAuthor
        FROM books
        INNER JOIN authors ON books.author = authors.id_author");
        return $query->getResult();

        /* return $this->table('books')
        ->select()
        ->join('SELECT books.id_book, books.title_book, authors.id_author, authors.name as nameAuthor','book.author = authors.id_author'); */
    }

    /* public function saveBook($lastId){
        $this->db->insert('books',$lastId);
        return $this->db->insertID();
    } */
}
