<?php

exo_1
function retourneTrue() {
    return true;
}

// Appel de la fonction
$resultat = retourneTrue();

// Affichage du résultat
var_dump($resultat); // Cela affichera "bool(true)"

exo_2

$alexis = "alexis";
$turan = "turan";

function chaine($prenom1,$prenom2) {

    return $prenom1 . " " . $prenom2;
}

echo chaine($alexis, $turan);

exo_3

function chaine($prenom1,$prenom2) {

    return $prenom1." ". $prenom2;
}
echo chaine("bonjour","aurevoir");

exo_4

function chaine($n1,$n2) {
if($n1 > $n2){ 
    return "Le premier nombre est plus grand";
}elseif($n1 <  $n2){
    return"Le premier nombre est plus petit";
}else{
    return "Les deux nombres sont identiques";
}


}
chaine (10,20);
chaine (20,10);
chaine (10,return

exo_5

function chaine($nombre,$bonjour) {

    return $nombre.' '.$bonjour;
}

echo chaine(007,"bonjour");

exo_6

function forme($nom,$prenom,$age) {

    return "bonjour ".$nom." ".$prenom." tu as ".$age." ans ";

}

echo forme("moreno","alexis",25);

exo_7
function visa($age,$gender){

    if(($age >= 18)&&($gender === "homme")){
        return "Vous êtes un homme et vous êtes majeur";
    
    } elseif (($age < 18)&&($gender === "homme")){
        return "Vous êtes un homme et vous êtes mineur";
    
    }elseif (($age < 18)&&($gender === "femme")){
        return "Vous êtes une femme et vous êtes mineur";
    
    }elseif (($age >= 18)&&($gender === "femme")){
        return "vous etes une femme et vous etes majeur";
    }
}

echo visa(20,"homme");
echo visa(10,"homme");
echo visa(20,"femme");
echo visa(10,"femme");

exo_8

function chaine($n1,$n2,$n3){

return $n1+$n2+$n3;
}

echo chaine(10,20,30);








?>