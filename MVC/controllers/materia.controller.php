<?php

require_once('./models/materia.model.php');
require_once('./views/materia.view.php');

class MateriaController{

    private $materiasModel;
    private $materiasView;

    function __construct(){
        $this->materiasModel = new MateriaModel();
        $this->materiasView = new MateriaView();
    }

    function showMateria(){
        if(isset($_GET)&& isset($_GET['id'])){
            $id = $_GET['id'];
            $materia = $this->materiasModel->get($id);
            $this->materiasView->displayMateria($materia);
        }
        else{
            $this->showMaterias();
        }
    }

    function showMaterias(){
        $materias = $this->materiasModel->getAll();
        $this->materiasView->displayAll($materias);
    }
}