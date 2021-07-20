<?php

namespace App\Models;

use App\Controllers\Author;
use CodeIgniter\Model;

class AuthorModel extends Model
{
    protected $table      = 'authors';
    protected $primaryKey = 'id_author';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function mostrarAutor(){
        $query = $this->db->query("SELECT authors.id_author, authors.name FROM authors;");
        return $query->getResult();
    }

    public function insertar($datos){
        $authors = $this->db->table('authors');
        $authors->insert($datos);

        return $this->db->insertID();
    }

    public function obtenerAutor($data){
        $name = $this->db->table('authors');
        $name->where($data);

        return $name->get()->getResultArray();
    }

    public function actualizar($data,$id){
        $author = $this->db->table('authors');
        $author->set($data);
        $author->where('id_author',$id);

        return $author->update();
    }

    public function eliminar($data){
        $author = $this->db->table('authors');
        $author->where($data);
        return $author->delete();
    }

    public function vaciarTabla(){
        $authors = $this->db->table('authors');
        return $authors->emptyTable();
    }
}