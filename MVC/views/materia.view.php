<?php

class MateriaView{

    function displayAll($materias){

        $html = "<ul>";
        foreach($materias as $materia){
            $html .= "<li>{$materia->nombre} : {$materia->docente} </li>";
        }
        $html .= "</ul>";
    
        echo $html;
    }

    function displayMateria($materia){
        var_dump($materia);
    }
}