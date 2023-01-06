<?php 
    require 'persona.php';

    $persona1 = new Persona();
    $persona1->setId(3);
    $persona1->setName("Juan");

    echo 'Hola mi nombre es: '.$persona1->getName();
?>