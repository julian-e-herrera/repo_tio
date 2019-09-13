<?php
class MateriaModel{

    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=db_presentismo;charset=utf8','root','');
    }

    function getAll(){
    
        //preparo la consulta
        $query = $this->db->prepare('SELECT * FROM materia');
    
        //ejecuto la consulta
        $query->execute();
    
        //obtengo la respuesta
        $materias = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $materias;
    }

    function get($id){

        $query = $this->db->prepare('SELECT * FROM materia WHERE materia.id = ?');
        $query->execute(array($id));
        $materia = $query->fetch(PDO::FETCH_OBJ);
        
        return $materia;
    }

}