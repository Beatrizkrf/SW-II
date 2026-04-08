<?php

     //pegar o arquivo
    $lista_produtos = file_get_contents("produtos.json");

    //convertendo pro array
    $lista = json_decode($lista_produtos, true);

    //adc novo produto
    $produto_novo = ["nome" => "Celular",
                      "preco" => 4000,
                      "quantidade"=> 12
                    ];
    
    // colocando no array  
     $lista["produtos"][] = $produto_novo;
     
     //convertendo
     $item_novo = json_encode($lista);

     //salvando
     file_put_contents("produtos.json", $item_novo);
?>