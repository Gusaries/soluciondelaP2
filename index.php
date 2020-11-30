<?php
include_once "Calculadora.php";
$myCalc =  new Calculadora(25,5);
echo "Suma: ".$myCalc->sumar()."<br>";
echo "Resta: ".$myCalc->restar()."<br>";
echo "Multiplicacion: ".$myCalc->multiplicar()."<br>";
echo "Division: ".$myCalc->dividir()."<br>";


/*include_once "Persona.php";
$persona = new Persona();
echo $persona ->cambiarEmail();
$persona ->nombre ="Rolando";
$persona->setTelefono(telefono: 935629643);
echo $persona->getTelefono
// require_once
//include_once*/





