<?php 
    require 'persona.php';
    require 'celular.php';
    require 'computadora.php';
    require 'mochila.php';
    require 'consola.php';
    require 'audifonos.php';

    $persona1 = new Persona();
    $persona1->setId(3);
    $persona1->setName("Juan");

    echo 'Hola mi nombre es: '.$persona1->getName();


    $celular1 = new Celular();
    $celular1->setMarca('Apple');
    $celular1->setModelo('IPHONE 11 PRO MAX');
    $celular1->setColorc('Rojo');

    echo 'Mi celular es un :'.$celular1->getMarca(). ' El modelo es: '.$celular1->getModelo(). ' Y es de color: '.$celular1->getColorc();
    echo '<br>';

    $computadora1 = new Computadora();
    $computadora1->setMarca1('ASUS ROG');
    $computadora1->setProcesador('RYZEN 5');
    $computadora1->setAlmacenamiento('2 TB');

    echo 'Mi computadora es de la marca: '.$computadora1->getMarca1(). 'tiene un procesador: '.$computadora1->getProcesador(). 'cuenta con un almacenamiento de: '.$computadora1->getAlmacenamiento();
    echo '<br>';

    $mochila1 = new Mochila();
    $mochila1->setTamaño('Grande');
    $mochila1->setMarcam('CHENSON');
    $mochila1->setColorm('Negra');

    echo 'Mi mochila es de tamaño: '.$mochila1->getTamaño(). ' Es de la marca: '.$mochila1->getMarcam(). ' Es de color: '.$mochila1->getColorm();
    echo '<br>';

    $consola1 = new Consola();
    $consola1->setCompania('Sony');
    $consola1->setModeloc('Play Station 5');
    $consola1->setColorc('Blanco Glacial');

    echo 'Mi consola de videojuegos es de la compañia: '.$consola1->getCompania(). 'El modelo es el: '.$consola1->getModeloc(). 'y el color es:'.$consola1->getColorc();
    echo '<br>';

    $audifonos1 = new Audifonos();
    $audifonos1->setTipo('Diadema');
    $audifonos1->setColor('Negros');
    $audifonos1->setMarcaa('Razer');

    echo 'Mis audifonos son de :'.$audifonos1->getTipo(). 'Son de color :'.$audifonos1->getColor(). 'Y son de la marca: '.$audifonos1->getMarcaa();
    echo '<br>';

?>