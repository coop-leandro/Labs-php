<?php


$data = new DateTime();

$data->modify('+5 days');

echo $data->format('d/m/y');

$data->modify('+2 months');

echo $data->format('d/m/y');

