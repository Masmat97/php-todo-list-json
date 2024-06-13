<?php

$friends = [
     [
        'name' => 'Luca',
        'last_name' => 'Rossi'
     ],
     [
        'name' => 'Antonio',
        'last_name' => 'Bianchi'
     ],
     [
        'name' => 'Giuseppe',
        'last_name' => 'Verdi'
     ],
     [
        'name' => 'Cristoforo',
        'last_name' => 'Colombo'
     ],
     [
        'name' => 'Simone',
        'last_name' => 'Esposito'
     ],
];
header('Content-Type: application/json');

$jsonString = json_encode($friends);

echo $jsonString;