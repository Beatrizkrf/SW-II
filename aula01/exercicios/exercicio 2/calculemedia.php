<?php

    $n1=8;
    $n2=7;
    $n3=9;

    if( ($media = ($n1 + $n2 + $n3)/3) >= 7){
        echo" Média: " .$media. " - Aprovado!" . "<br>";
    }else{
        echo" Média: " .$media. " - Reprovado!" . "<br>";
    }
    
    echo "Nota = ". $n1 ."<br>". "Nota =  ". $n2 ."<br>" . "Nota = ". $n3 ."<br>"

?>