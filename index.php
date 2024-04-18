<?php

// Traccia 1:
// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere. Esempio di array:

$users = [

    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],

    ['name' => 'Vincenzo', 'surname' => 'Piccinonna', 'gender' => 'NB'],

    ['name' => 'Lucrezia', 'surname' => 'Romana', 'gender' => 'F'],

    ['name' => 'Rocco', 'surname' => 'Alicchio', 'gender' => 'M'],

];




foreach ($users as $user => $value) {
    
    if ($value['gender']== 'M') {
        echo "Buongiorno signor {$value['name']} {$value['surname']}\n";
    }else if ($value['gender']=='F'){
        echo "Buongiorno signora {$value['name']} {$value['surname']}\n";
    } else {
        echo "Buongiorno {$value['name']} {$value['surname']}\n";
    }

     
}



// Traccia 2:
// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array.

$numbers = [
    1, 5, 8, 12, 22, 33, 68, 2, 99, 100

];

$sum = 0;
$conta = 0;

foreach ($numbers as $number) {

   if ($number % 2 == 0) {

    $sum += $number; //8+12+22+68+2+100 = 210
    $conta++; //1+1+1+1+1+1 = 6

    } 
};


$media = $sum/$conta;
echo "la media è $media";


// Traccia 3:
// Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".

for ($i=0; $i < 101 ; $i++) { 

        if ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY \n";

        
    } else if($i % 3 == 0) {

        echo  "PHP \n";

    } else if($i % 5 == 0){

      echo  "JAVASCRIPT \n";

    } else {
        echo $i."\n" ;
    }
   
    
}




?>