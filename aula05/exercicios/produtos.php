<?php
    //criando um array com a variavel json_str
    $json_str='{"produtos":
        [
            {"nome":"Celular", "preco":2000, "quantidade": 5},
            {"nome":"Notebook", "preco":3000, "quantidade": 15},
            {"nome":"Chocolate", "preco":20, "quantidade": 50}
        ]
    }';

    //encodando

    $json_str = json_encode($produtos);
    
    


?>