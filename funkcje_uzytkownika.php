<?php #declare(strict_types=1);

# Więcej informacji -> https://www.w3schools.com/php/php_functions.asp

#definicja najprostszej funkcji 
function wypiszTo(){
    echo "Wypisuję to co mi kazano<br>";
}

#wywołanie funkcji
wypiszTo();


/* Funkcja z argumentami

Informacje można przekazywać do funkcji za pomocą argumentów. Argument jest jak zmienna.
Argumenty podaje się po nazwie funkcji, w nawiasach. Możesz dodać dowolną liczbę argumentów, wystarczy oddzielić je przecinkiem.

*/

function wypiszTo2($tresc){
    echo "Przekazana do funkcji treść to:<b> ".$tresc.'</b><br>';
}

wypiszTo2("Marjan to jest gość!");

#lub przez zmienną
$tresc = "Marjan to jest gość!";
wypiszTo2($tresc);


#funkcja może posiadać dowolną ilość zmiennych
function wypiszDate($dzien,$miesiac,$rok){
    echo "Data to: $dzien $miesiac $rok";
    echo "<br>";
}

wypiszDate(1,'styczen',1999);


#funkcja z domyślną wartością parametru
function ustawRozmiar($rozmiar = 18){
    echo "Ustawiam rozmiar na: ".$rozmiar.'<br>';
}
ustawRozmiar();
ustawRozmiar(15);


#funkcja zwracająca wartość
function policzSume($x, $y){
    return $x+$y;
}

echo policzSume(5,6);
echo '<br>';
echo policzSume(5,'6');


echo '<br><br>';
#funkcja z parametrem przez referencję
function zmienLiczbe(&$x){
    $x = $x+10;
}
$liczba = 2;
zmienLiczbe($liczba);
echo $liczba;



echo '<br><br>';
#funkcja z deklaracją typów zmiennych
function wypiszTo3(int $lat, string $imie){
    echo "$imie ma $lat lat.";
}
wypiszTo3(40,"Tomek");