<?php

exo_1
function retourneTrue() {
    return true;
}

// Appel de la fonction
$resultat = retourneTrue();

// Affichage du résultat
var_dump($resultat); // Cela affichera "bool(true)"


$alexis = "alexis";
$turan = "turan";

function chaine($prenom1,$prenom2) {

    return $prenom1 . " " . $prenom2;
}

echo chaine($alexis, $turan);


function chaine($prenom1,$prenom2) {

    return $prenom1." ". $prenom2;
}
echo chaine("bonjour","aurevoir");

function chaine($n1,$n2) {
if($n1 > $n2){ 
    echo "Le premier nombre est plus grand";
}elseif($n1 <  $n2){
    echo "Le premier nombre est plus petit";
}else{
    echo "Les deux nombres sont identiques";
}


}
chaine (10,20);
chaine (20,10);
chaine (10,10);

function chaine($nombre,$bonjour) {

    return $nombre.' '.$bonjour;
}

echo chaine(007,"bonjour");

function forme($nom,$prenom,$age) {

    return "bonjour ".$nom." ".$prenom." tu as ".$age." ans ";

}

echo forme("moreno","alexis",25);


function visa($age,$gender){

    if(($age >= 18)&&($gender === "homme")){
        echo "Vous êtes un homme et vous êtes majeur";
    
    } elseif (($age < 18)&&($gender === "homme")){
        echo "Vous êtes un homme et vous êtes mineur";
    
    }elseif (($age < 18)&&($gender === "femme")){
        echo "Vous êtes une femme et vous êtes mineur";
    
    }elseif (($age >= 18)&&($gender === "femme")){
        echo "vous etes une femme et vous etes majeur";
    }
}

visa(20,"homme");
visa(10,"homme");
visa(20,"femme");
visa(10,"femme");



function chaine($n1,$n2,$n3){

return $n1+$n2+$n3;
}

echo chaine(10,20,30);








?>