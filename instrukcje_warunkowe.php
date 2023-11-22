<?php

/*
https://www.w3schools.com/php/php_if_else.asp


Instrukcje warunkowe służą do wykonywania różnych działań w oparciu o różne warunki.

W PHP mamy następujące instrukcje warunkowe:

     instrukcja if - wykonuje jakiś kod, jeśli jeden warunek (lub zbiór warunków) jest prawdziwy
     instrukcja if...else - wykonuje pewien kod, jeśli warunek (lub zbiór warunków) jest prawdziwy, i inny kod, jeśli warunek jest fałszywy
     instrukcja if...elseif...else - wykonuje różne kody dla więcej niż dwóch warunków (lub zbiorów warunków)

     instrukcja switch - wybiera jeden z wielu bloków kodu do wykonania
*/


/* if

if(warunek lub zbiór warunków){
    wykonaj operacje pomiędzy klamrami jeżeli spełniony warunek
}

*/
$x = 3;

if($x<5){
    echo 'X jest mniejsze od pięć';
}

//lub w zbiór warunków z wykorzystaniem operatorów logicznych
$x = 3;
$y = 5;

if($x<$y and $y>10){
    echo 'Wykonaj instrukcję jeżeli x<y oraz y>10';
}

//uwaga aby łączyć warunki w logiczne elementy należy wewnątrz użyć ()
if(($x<$y and $y>10) or $y>=0){
    echo 'Wykonaj instrukcję jeżeli (x<y oraz y>10) lub kiedy y>=0';
}






/* if ... else 

    if(warunek lub zbiór warunków){
       wykonaj operacje pomiędzy klamrami jeżeli spełniony warunek
    } else {
        w innym przypadku wykonaj te instrukcje
    }
*/

$txt = 'lipa brzozowa';

if(strlen($txt) < 4 ){
    echo 'tekst krótszy niż 4 znaki';
} else {
    echo 'tekst dłuższy niż 4 znaki';
}


/* if ... elseif (...) ... else

    if(pierwszy warunek){
       wykonaj operacje pomiędzy klamrami jeżeli spełniony warunek pierwszy
    } elseif(drugi warunek) {
        w innym przypadku wykonaj te instrukcje jeżeli warunek pierwszy nie spełniony a spełniony warunek drugi  
    }
    ....
    //opcjonalnie
    
    else {
        wykonaj w przypadku kiedy żadnej z powyższych warunków nie został spełniony
    }

*/

$txt = 'lipa brzozowa';

if(strlen($txt) < 4 ){
    echo 'tekst krótszy niż 4 znaki';
} elseif($txt == 'lipa dębowa') {
    echo 'tekst inny niż lipa dębowa';
} else {
    echo 'tekst inny niż lipa dębowa i dłuższy niż 4 znaki';
}



/* switch 

    Użyj switch aby wybrać jeden z wielu bloków kodu do wykonania w zależności od wartości zmiennej.

    switch (n) {
        case wartosc1:
            code to be executed if n=label1;
            break;
        case wartosc2:
            code to be executed if n=label2;
            break;
        case wartosc3:
            code to be executed if n=label3;
            break;
            ...
        default: 
            code to be executed if n is different from all labels;
        } 

    Jak to działa?
    Do instrukcji switch w miejsce n wstawiamy wyrażenie (najczęściej zmienną). Jej wartość jest sprawdzana raz poprzez wszystkie warunki poniżej. 
    jeżeli jakiś case posiada wartość warunku to wykonywany jest kod pomiędzy ":" a instrukcję "break;" (przerwij). 
    Do instukcji switch można dodać warunek "default", a instrukcje mu przypisane zostaną wykonane jeżeli wcześniej nie będzie dopasowania do innego warunku tzw. instrukcja domyślna :)

*/

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
   break;
}


