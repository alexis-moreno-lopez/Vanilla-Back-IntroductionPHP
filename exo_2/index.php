<?php

$age = 25;

if($age >= 18) {
    echo 'vous etes majeur';
    
}else{
    echo 'vous etes mineur';
}


$isEasy = true;
if($isEasy === true){
    echo "c'est facile";

}else{
    echo "c'est difficile";
}

$age = 19;
$gender = "femme";


if(($age >= 18)&&($gender === "homme")){
    echo "Vous êtes un homme et vous êtes majeur";

} elseif (($age <= 18)&&($gender === "homme")){
    echo "Vous êtes un homme et vous êtes mineur";

}elseif (($age <= 18)&&($gender === "femme")){
    echo "Vous êtes une femme et vous êtes mineur";

}elseif (($age >= 18)&&($gender === "femme")){
    echo "vous etes une femme et vous etes majeur";
}


$magnitude = 9;

switch ($magnitude) {
    case 1:
        echo "Micro-séisme impossible à ressentir.";

break;

    case 2:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";

break;

    case 3:
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti." ;
        break;

    case 4:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";

        break;

    case 5:
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes." ;

        break;

    case 6:
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre." ;

        break;

    case 7:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance." ;

        break;

    case 8:
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres." ;

        break;

    case 9:
        echo 	"Séisme capable de tout détruire sur une très vaste zone." ;
}

$gender = "homme";

if($gender === "homme"){
    echo "c'est un développeur";

}else{
    echo "c'est une développeuse !!!";
}


$age = 18;
if($age >= 18) {
    echo "tu es majeur";
}else{
    echo"tu es mineur";
}

$isok = false;

if($isok == false) {
echo "c'est pas bon !!!";
}else{
    echo "c'est ok !!";
}

$isok = true;

if($isok == true) {
echo "c'est ok !!!";
}else{
    echo "c'est pas bon !!";
}






?>