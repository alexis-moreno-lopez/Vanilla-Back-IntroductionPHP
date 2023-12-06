<?php

exo1

$months = ["janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];

exo2


$months = ["janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];


echo $months [2];


exo3

 $months = ["janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];


echo $months [5]

exo4

$months = ["janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];

$months [7] = "août";
var_dump ($months);

exo5


$departement=[

    'Aisne' => 02,
    'Nord' => 59,
    'Oise'=> 60,
    'Pas-de-Calais'=>62,
    'Somme'=> 80,
    
    ];

var_dump($departement);

exo6

$departement=[

    'Aisne' => 02,
    'Nord' => 59,
    'Oise'=> 60,
    'Pas-de-Calais'=>62,
    'Somme'=> 80,
    
    ];

echo $departement["Nord"];

exo7
$departement=[

    'Aisne' => 02,
    'Nord' => 59,
    'Oise'=> 60,
    'Pas-de-Calais'=>62,
    'Somme'=> 80,
    
    ];
 
$departement = ["reims" => 51];
var_dump ($departement);

exo8
$months = ["janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];


foreach ($months as $month) {
    echo $month." ";
}
exo9
$departements=[

    'Aisne' => 02,
    'Nord' => 59,
    'Oise'=> 60,
    'Pas-de-Calais'=>62,
    'Somme'=> 80,
    
    ];
 



foreach ($departements as $departement) {
    echo $departement." ";
}
exo10

$departements=[

    02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62=>'Pas-de-Calais',
    80=> 'Somme',
    
    ];
 



foreach ($departements as $key => $departement) {
    echo  "Le département ".$departement." a le numéro " .$key;
}




?>