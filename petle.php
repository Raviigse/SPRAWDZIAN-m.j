<?php

/*
    https://www.w3schools.com/php/php_looping.asp
    https://kursphp.com/nauka-php-online/

    https://www.php.net/manual/en/control-structures.for.php
    https://www.php.net/manual/en/control-structures.alternative-syntax.php


    Często, gdy piszesz kod, chcesz, aby ten sam blok kodu był uruchamiany w kółko określoną liczbę razy. Zamiast więc dodawać do skryptu kilka niemal identycznych linii kodu, możemy użyć pętli.

    Pętle służą do wielokrotnego wykonywania tego samego bloku kodu, o ile spełniony jest określony warunek.

    W PHP mamy następujące typy pętli:

     while          - wykonuje pętlę przez blok kodu, o ile określony warunek jest spełniony
     do...while     - wykonuje jednorazową pętlę przez blok kodu, a następnie powtarza pętlę, dopóki podany warunek jest spełniony
     for            - przechodzi przez blok kodu określoną liczbę razy
     foreach        - przechodzi przez blok kodu dla każdego elementu tablicy

     break / continue - instrukcje do przerwania / kontynuowania pętli 

*/



/* while - 

Pętla while wykonuje blok kodu, o ile określony warunek jest spełniony.

while (condition is true) {
  code to be executed;
} 

*/

$i = 1;
while ($i <= 10) {
    echo $i;
    $i++;  
}



/*  do...while  

   Pętla do...while zawsze wykona blok kodu raz, następnie sprawdzi warunek i powtórzy pętlę, dopóki określony warunek będzie spełniony.

    do {
        code to be executed;
    } while (condition is true); 

*/

$x = 1;
//$x = 6;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);


/* for ..

    Pętla for — wykonuje pętlę przez blok kodu określoną liczbę razy.

    for (init counter; test counter; increment counter) {
        code to be executed for each iteration;
    } 

    Parametry:
    1. init counter:   Zainicjuj wartość licznika pętli
    2. test counter:   oceniany dla każdej iteracji pętli. Jeśli zwróci wartość TRUE, pętla będzie kontynuowana. 
                    Jeśli zwróci wartość FALSE, pętla się kończy.

    3. licznik przyrostu: Zwiększa wartość licznika pętli

*/

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  } 



/* foreach

  Pętla foreach — wykonuje pętlę przez blok kodu dla każdego elementu tablicy.
  Pętla foreach działa tylko na tablicach i służy do przeglądania każdej pary klucz/wartość w tablicy.

  foreach ($array as $value) {
    code to be executed;
  }

  lub

  foreach ($array as $key => $value) {
    code to be executed;
  } 


  */

  $colors = array("red", "green", "blue", "yellow");

  foreach ($colors as $value) {
    echo "$value <br>";
  }



  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach($age as $x => $val) {
    echo "$x = $val<br>";
    }


    $cars = [
      'Renault' => [
          'engine' => '1.0',
          'fuel' => 'pb95',
          'color' => 'black'
      ],
      'Audi' => [
          'engine' => '2.0',
          'fuel' => 'diesel',
          'color' => 'white'
      ],
      'Peugot' => [
          'engine' => '2.0',
          'fuel' => 'pb95',
          'color' => 'red'
      ]
  ];
  foreach($cars as $model =>$wlasciwosci){
      echo $model.'<br>';
      foreach($wlasciwosci as $co => $wartosc){
           echo "$co => $wartosc <br>";
      }
  }


 /* break; 
 
    Instrukcji break można także użyć do wyskoczenia z pętli (for, foreach, while, do-while, switch). Oznacza dosłownie "skończ wykonywać pętle w tym momencie"
    Instrukcji tej używamy np. w instrukcji warunkowej switch :)


   */
  
  for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;  //break 1;
    }
    echo "The number is: $x <br>";
  }


  $x = 0;

  while($x < 10) {
        if ($x == 4) {
            break;
        } 
        echo "The number is: $x <br>";
        $x++;
  } 



/* continue;

    Instrukcja continue przerywa jedną iterację (w pętli), jeśli wystąpi określony warunek, i kontynuuje od następnej iteracji w pętli.
    Czyli dosłownie, skończ instrukcje pętli w tym miejscu i zacznij od początku z kolejną iteracją.
    Ma zastosowanie w pętlach for, foreach, while, do-while;

*/


for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
}


$x = 0;

while($x < 10) {
  if ($x == 4) {
    $x++;
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
} 




/* break level; continue level;

  Dla wielopoziomowych instrukcji warunkowych np. while w while lub mieszanych można użyć break lub continue wskazując ilu poziomów ma dotyczyć ta instrukcja

*/

for($i=0;$i<5;$i++){
    echo "Wykonuję pętlę 1, wartość i: $i<br>";
    for($j=0;$j<=5;$j++){
        if($j==3){
            echo 'dla elementu j == 3 ------------------- > kontynuuję pętlę 2 z pominięciem wypisu<br>';
            continue; //continue 1;

            // echo 'dla elementu j == 3 ------------------- > przerywam pętlę 1, pętla już więcej się nie wykona w tej iteracji pętli 1<br>';
            // break; //break 1;

            // echo 'dla elementu j == 3 ------------------- > kontynuuję pętlę 1<br>';
            // continue 2;

            // echo 'dla elementu j == 3 ------------------- > przerywam pętlę 1<br>';
            // continue 2;
        }
        echo "Wykonuję pętlę 2, wartość j: $j <br>";
    }
}



$i = 0;
while ($i < 5) {
    echo "Outer\n";
    while (1) {
        echo "Middle\n";
        while (1) {
            echo "Inner\n";
            continue 3;
        }
        echo "This never gets output.\n";
    }
    echo "Neither does this.\n";

    $i++;
}




