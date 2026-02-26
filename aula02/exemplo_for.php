<?php

    for ($i=01; $i <= 5; $i++) { 
        echo $i;
        echo "<br>";
    }
    echo "<hr>";

    // Array
 
    //forma simples de mostrar  na tela
    $nomes=['Fulano', 'Ciclano', 'Beltrano', 'Barbie' ];
    // echo $nomes[0];
    // echo "<br>";
    // echo $nomes[1];
    // echo "<br>";
    // echo $nomes[2];
     

    //forma "certa" de mostrar na tela para receber vários valores com for 
    
    $qtde= count($nomes);
    // echo $qtde;
    // echo "<hr>";

    for ($i=0; $i <= $qtde -1 ; $i++) { 
        echo $nomes[$i];
        echo "<br>";
    }
    echo "<hr>";

    //com foreach

    foreach ($nomes as $indice => $value) {
        echo $indice . " => ". $value; 
        echo "<br>";
    }

?>    