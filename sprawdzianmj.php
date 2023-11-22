<?php 

/*
Sprawdzian PHP (1)

Łączna ilość punktów: 48.
Czas: 45 min. 

Prace umieszczamy w formie pliku z odpowiedziami na pulpicie w formie spakowanej podpisanej imieniem i nazwiskiem.
*/

#######  
#Zadanie 1 (3pkt) Zakomentuj poniższe linie kodu wykorzystując wszytkie znane Ci 3 sposoby (każdą inaczej) 
#######

#echo "Użyj na nas komentarza :)";

//$y = 4;

/*echo <<< END
    wielo
    #poziomowy
    tekst<br><br>
END;*/

#######
#zadanie 2 (2 pkt) popraw nazwy/wartości poniższych zmiennych na prawidłowe i wypisz za pomocą echo lub var_dump() zależnie od rodzaju zmiennej:
#######

$intiger = 3;
echo $intiger ;
echo"<br>";
$null = null;
var_dump($null) ;
echo"<br>";
$double = 4.43;
echo $double;
echo"<br>";
$boolean = true;
var_dump($boolean);
echo"<br>";
$array = "Marysia";
echo $array;
echo"<br>";


#######
#zadanie 3 (5 pkt). Wykonaj na poniższych zmiennych działania i wypisz ich wyniki: y podzielić przez x, y odjąć x, y do potęgi z, z modulo y, y do potęgi z
#######

$x = 100;
$y = 20;
$z = 2;

echo $y / $x ;
echo"<br>";
echo $y - $x;
echo"<br>";
echo $y ** $z;
echo"<br>";
echo $z % $y;
echo"<br>";
echo $y ** $z;
echo"<br>";


#######
# zadanie 4 (5 pkt). Na poniższej zmiennej x, wykonaj kolejno dzialania (x+y, x**y, x-y) z wykorzystaniem operatorów przypisania  (+=, -= etc) oraz zmiennej y .
# wypisz wartość zmienniej x po wykonaniu wszystkich działań;
# ostatni wynik zapisz do zmiennej $wynik i wykonaj na niej inkrementację oraz dekrementację korzystając z odpowiednich operatorów wykonujących działania po wypisaniu zmiennej.
#######

$x = 50;
$y = 2;
$x=50;$y=2;
echo $x+=$y;
echo"<br>";
$x=50;$y=2;
echo $x**=$y;
echo"<br>";
$x=50;$y=2;
echo $x-=$y;
echo"<br>";

echo $x;
echo"<br>";

$wynik=$x-=$y;
echo $wynik++;
echo"<br>";

echo $wynik--;
echo"<br>";
#######
# zadanie 5 (3 pkt)
# Korzystając z operatora !! konkatenacji !! oraz własnej inwencji ułóż zdanie używając poniższych zmiennych i wypisz je za pomocą funkcji echo lub print.
# !!! Wypisz to samo zdanie, ale zamiast wartości zmiennych wypisz ich nazwy wraz z $ ;
#######

$a = "Dziadek";
$b = "Babcia";
$c = "rower";

echo "$a"." i "."$b"." idą"." na"." $c<br>";

echo "$a i $b idą na $c<br>";

#######
#zadanie 6.(3 pkt) Korzystając z odpowiedniej funkcji (implode lub join) oraz operatora konkatenacji wypisz elementy poniższej tablicy w zadaniu (rozdzielając je przecinkiem). 
#uwaga! posortuj elementy tablicy malejąco przed wypisaniem!
#######
$tab01 = ["Romek", "Antosia", "Wiesiek"];
rsort($tab01); 
echo "Wybrano nowy komitet, w jego skład wchodzą:".implode(', ',$tab01); 
echo"<br>";//w tej lini dopisz swoje rozwiązanie


#######
# zadanie 7 (7 pkt)
/* 
Utwórz zmienną $t i przypisz do niej tablicę dowolnych wartościach typu integer lub float (min 5 wartości). Klucze nie mają znaczenia (tablica zwykła).
następnie: 
    a) wypisz ją funkcją wskazującą klucze i wartości poszczególnych elementów
    b) wypisz przedostatni element tablicy, 
    b) dodaj kolejny element tablicy korzystając z funkcji "automatycznej indeksacji" dla nowego elementu "[]" i wypisz wszystkie elementy tabeli korzystając z funkcji implode()
    c) zmień wartość pierwszego elementu na dowolny i wypisz go
*/
$t=[1,2,3,4,5];
var_dump($t);
echo"<br>";

echo $t[3];
echo"<br>";

$t[] = 6;
echo implode(', ',$t); 
echo"<br>";

$t[2]= 9;
    print_r($t);
    echo"<br>";
#######
# zadanie 8 (14 pkt)
/*
Utwórz tablicę asocjacyjną "klasa", która będzie zawierała pary zmiennych numer w dzienniku => imię i nazwisko ucznia
Tablica powinna zawierać przynajmniej 3 elementy. Tablicę przypisz to zmiennej $klasa. Następnie:
      a) Wypisz tablicę za pomocą funkcji print_r()
      b) Wypisz imiona ucznków z nawyższym i najniższym numerem
      c) Dodaj nowy element tablicy (nowego  ucznia) bez zmiany samej definicji tablicy tj. nie zmieniając miejsce definicji tablicy.
      d) Korzystając z funkcji foreach wypisz imiona ucznków z tablicy $klasa.
      e) Posortuj tablicę po numerkach w dzienniku rosnąco 
      f) Posortuj tablicę po imionach rosnąco - nie zwracaj uwagi na polskie znaki
      f) Korzystając z funkcji foreach wypisz wszystkie pary w formacie "numer w dzinniku -> imię i nazwiko ucznia" (klucz => wartosc)
*/
 $klasa=array(
    1 => 'Bartosz Witczak',
    2 => 'Aleksander Gruszka',
    3 => 'Fabian Kluk'
 );
 print_r($klasa);
 echo"<br>";
    $najwyzszy_numer = max(array_keys($klasa));
    $imie_najwyzszego = $klasa[$najwyzszy_numer];
    echo "Imię ucznia z najwyższym numerem ($najwyzszy_numer): $imie_najwyzszego <br>";

    $najnizszy_numer = min(array_keys($klasa)); 
    $imie_najnizszego = $klasa[$najnizszy_numer];
    echo "Imię ucznia z najniższym numerem ($najnizszy_numer): $imie_najnizszego <br>";

    $klasa[4] = 'Szymon Luczak';
    echo implode(', ',$klasa); 
    echo"<br>";

    foreach($klasa as $numerucznia => $imieucznia){
        echo "imie ucznia :$imieucznia <br>";
    }
    
    ksort($klasa);
    print_r($klasa);
    echo"<br>";

    asort($klasa);
    print_r($klasa);
    echo"<br>";
    
#######
# zadanie 9 (4 pkt)
 
   #Dla poniższych tablic z użyciem odpowiednich operatorów tablicowych:

    $t1 = ["abc","11",12];
    $t2 = ["12", "11", "abc"];
    $t3 = ["abc", 9, 8 ];

    #a) przypisz do zmiennej $ut unię tablic $t1 i $t3 oraz wypisz tą zmienną
    #b) sprawdź czy $t1 i $t2 są identyczne i wypisz wynik testu odpowiednią funkcją
    #c) sprawdź czy $t1 i $t2 nie są takie same i wypisz wynik testu odpowiednią funkcją

$ut = array_merge($t1, $t2);
print_r($ut);

if ($t1 == $t2) {
    echo "Tablice są identyczne<br>";
}
if ($t1 != $t2) {
    echo "<br>Tablice nie są identyczne<br>";
} else {
    echo "Tablice są identyczne<br>";
}

#######
# zadanie 10 (2 pkt)
# Ze zmiennej $txt utwórz tablicę fraz rozdzielając je po ";". Wykorzystaj funkcję explode();  Wypisz otrzymaną tablicę dowolną funkcją.;
$txt = "Zosia;Marianna;Genowefa;Pigwa";
$tablica_fraz = explode(";",$txt);
print_r($tablica_fraz);
echo"<br>";




#######
# zadanie 11*** (na 6 / 8 pkt)
$Wyloty = [
    'Warszawa' => [
        '7:32' => 'Maroko',
        '11:58' => 'Zimbabwe',
        '17:00' => 'Budapeszt'
    ],

    'Katowice' => [
        '6:32' => 'Kraków',
        '12:00' => 'Radom',
        '18:00' => 'Paryż',
        '18:05' => 'Doha'
    ]
];

 //Z użyciem wielokrotnej pętli foreach oraz ew. innych funkcji wykonaj polecenie wykorzystując dane z poniższej tablicy
 //a) wypisz wyloty dla każdego z miast w formacie 

        //Nazwa miasta:
        //- godzina wylotu -> miejsce docelowe
        foreach ($Wyloty as $miasto => $wyloty) {
            echo "Nazwa miasta: $miasto:<br>";
            foreach ($wyloty as $godzina => $miejsce) {
                echo "- $godzina -> $miejsce<br>";
            }
            echo "<br>";
        }

 #b) poniżej wypisu wypisz dodatkowo dane w 3 wierszach:
    #Liczba wylotów z Warzszawy: liczba wylotów.
    #Liczba wylotów z Katowic: liczba wylotów.
    #Liczba wylotów z Warszawy i Katowic łącznie: liczba wylotów.
    $liczba_wylotow_warszawa = count($Wyloty['Warszawa']);
    $liczba_wylotow_katowice = count($Wyloty['Katowice']);
    $liczba_wylotow_razem = $liczba_wylotow_warszawa + $liczba_wylotow_katowice;
 
    echo "Liczba wylotów z Warszawy: $liczba_wylotow_warszawa<br>";
    echo "Liczba wylotów z Katowic: $liczba_wylotow_katowice<br>";
    echo "Liczba wylotów z Warszawy i Katowic łącznie: $liczba_wylotow_razem";

$Wyloty = [
                'Warszawa' => [
                    '7:32' => 'Maroko',
                    '11:58' => 'Zimbabwe',
                    '17:00' => 'Budapeszt'
                ],

                'Katowice' => [
                    '6:32' => 'Kraków',
                    '12:00' => 'Radom',
                    '18:00' => 'Paryż',
                    '18:05' => 'Doha'
                ]
            ];
