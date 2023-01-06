<?php 
    require 'persona.php';
    require 'carro.php';
    require 'ropa.php';
    require 'casa.php';
    require 'television.php';
    require 'lavadora.php';

    $persona1 = new Persona();
    $persona1->setId(3);
    $persona1->setName("Juan");

    echo 'Hola mi nombre es: '.$persona1->getName();
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

    
?>