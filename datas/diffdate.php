<?php

    date_default_timezone_set('America/Sao_Paulo');

    $data = new DateTime();
    $data2 = new DateTime();

    $diferenca = $data->diff($data2);

    echo $diferenca->format("%a days<br>");


    //---------------------------- compare -----------------------------


    if($data < $data2){
        echo "é menor";
    }else{
        echo "é maior";
    }

    // --------------------------- fuso horario -------------------------

    print_r($data);