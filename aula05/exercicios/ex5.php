<?php

    // pegando arquivo
    $lista_produto = file_get_contents("produtos.json");

    //convertendo pro array
     $lista = json_decode($lista_produto, true);

     //variavel pra remover
     $remove= "Celular";

     //pra pegar mais de um registro 
     $lista_pro = $lista['produtos'];

     //verificando os dados
     foreach ($lista_pro as $lp => $produto) {
        if ($produto['nome'] == $remove) {
            unset($lista["produtos"][$lp]); //apaga do array
        }
     }

      $json = json_encode($lista);
      file_put_contents("produtos.json", $json); 
?>