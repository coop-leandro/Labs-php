<?php 

$cincodias = strtotime("5 days");

echo $cincodias . "<br>";

$dataSoma = date('d/m/y', $cincodias);

echo $dataSoma;