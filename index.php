<?php 
    require 'persona.php';
    require 'celular.php';
    require 'computadora.php';
    require 'mochila.php';
    require 'consola.php';
    require 'audifonos.php';
    require 'carro.php';
    require 'ropa.php';
    require 'casa.php';
    require 'television.php';
    require 'lavadora.php';
    require 'teclado.php';

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


    $carro1 = new Carro();
    $carro1->setMatricula(13242);
    $carro1->setColor('Rojo');
    $carro1->setCombustible('Gasolina');

    echo 'El carro con matricula '.$carro1->getMatricula(). ' de color '.$carro1->getColor().' usa combustible de '.$carro1->getCombustible();
    
    echo '<br>';

    $lavadora1 = new Lavadora();
    $lavadora1->setTipo('Semi-Automatica');
    $lavadora1->setMarca('LG');
    $lavadora1->setCosto('$10,000');

    echo 'La lavadora es tipo: '.$lavadora1->getTipo(). ' de la marca '.$lavadora1->getMarca().' y tiene un costo de '.$lavadora1->getCosto();

    echo '<br>';

    $ropa1 = new Ropa();
    $ropa1->setPrenda('Pantalon');
    $ropa1->setColor('Mezclilla');
    $ropa1->setTalla('Grande');

    echo 'La prenda que compraste: '.$ropa1->getPrenda(). ' de color '.$ropa1->getColor().' y talla '.$ropa1->getTalla();

    echo '<br>';

    $casa1 = new Casa();
    $casa1->setMetros('200 metros');
    $casa1->setColor('Cafe');
    $casa1->setCosto('$300,000');

    echo 'Este inmueble tiene una extension de: '.$casa1->getMetros(). ' cuadrados, es de color '.$casa1->getColor().' y tiene un costo de '.$casa1->getCosto();

    echo '<br>';

    $tele1 = new Television();
    $tele1->setPulgadas('80 pulgadas');
    $tele1->setMarca('Samsung');
    $tele1->setCosto('$40,000');

    echo 'La television es de: '.$tele1->getPulgadas(). ' de la marca '.$tele1->getMarca().' y tiene un costo de '.$tele1->getCosto();

    echo '<br>';

    $teclado1 = new Teclado();
    $teclado1->setTipo('Mecanico');
    $teclado1->setColor('Negro con RGB');
    $teclado1->setMarca('SteelSeries');

    echo 'Mi teclado es de tipo: '.$teclado1->getTipo(). ' es de color: '.$teclado1->getColor(). 'y es de la marca: '.$teclado1->getMarca();
    
    echo '<br>';

    echo '<img src="images/git.jpg">'

?>