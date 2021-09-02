<?php
require_once 'Alumnos.php';


class AlumnoLibre extends Alumnos
{
 
    public $notaFinal;


    
    public function __construct($nombre, $apellido, $dni, $notaFinal){
     parent::__construct($nombre, $apellido, $dni, $notaFinal);
        $this->notaFinal = $notaFinal;
         }
     
    public function getNota(){
        return $this->notaFinal; //Es una unica Nota Final
         }

    public function __toString(){
        return  " {$this->apellido} , {$this->nombre} ; su DNI es  {$this->dni}  y su calificacion es:  {$this->notaFinal} " ; 
         }
          
      } 