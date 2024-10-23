<?php

    $nascimento = mktime(2, 12, 33,2,9,2005);

    echo $nascimento;

    $nascimentoFormat = date('d/m/y', $nascimento);
    echo $nascimentoFormat;