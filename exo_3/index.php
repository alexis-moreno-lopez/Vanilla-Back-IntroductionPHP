<?php

exo_1
for ($i = 0 ; $i < 11 ; $i ++){ //boucle for initialiser à 0. incrementer jusque 11
    echo  $i; //l'affiche
}
exo_2

$i = 0;
$b = 50;

while ($i <= 20){
    echo "<p>". ($i * $b) . "</p>";
    $i++;
}
exo_3

$i = 100;
$b = 10;

while ($i >= 10){
    echo "<p>". ($i * $b) . "<p>";
    $i--;
}

exo_4

for( $i = 1; $i <=10;$i =  $i/2 +$i )
echo $i."     ";

exo_5
for($i = 1 ; $i <=15; $i+=1)
echo $i ."<p>On y arrive presque</p>";

exo_6
  for($i = 20 ; $i >= 0; $i--)
  echo $i ."<p>C'est presque bon</p>";

exo_7

for($i = 1; $i <=100; $i+=15)
echo $i ."<p>On tient le bon bout</p>";

exo_8
for($i = 200; $i >=0; $i-=12)
echo $i ."<p> Enfin !!!!</p>";
?>