<?php

    //pegar o arquivo
    $lista_usuario = file_get_contents("usuarios.json");

    //decodando
    $usu_dados= json_decode($lista_usuario, true);

    //pra pegar mais de um registro 
    $dado_usu = $usu_dados['usuarios'];

    //exibir 
    foreach ($dado_usu as $du) {
        echo "Nome: " . $du['nome'] . "  -  Email: " . $du['email'] . "<br>";
    }

?>