<?php
//Programa para imprimir mensaje de bienvenida.
//Creado por ian levyn portillo escobedo
//09/09/25
//appweb1.php
// clase es como la manera de crear un objeto que puedes invocar similar a una funcion solo que esta ejecuta codigo como una metatabla.
class texto
{
    public $texto1 = "Bienvenidos a programacion de app web";
    public function imprimirtexto () {
        echo $this->texto1;
        print $this->texto1;
    }
}

$obj1 = new texto;
$obj1->imprimirtexto();
?>