<?php

$friends = [
     [
        'name' => 'Luca',
        'last name' => 'Rossi'
     ],
     [
        'name' => 'Antonio',
        'last name' => 'Bianchi'
     ],
     [
        'name' => 'Giuseppe',
        'last name' => 'Verdi'
     ],
     [
        'name' => 'Cristoforo',
        'last name' => 'Colombo'
     ],
     [
        'name' => 'Simone',
        'last name' => 'Esposito'
     ],
];
// header('Content-Type: application/json');

echo json_encode($friends);