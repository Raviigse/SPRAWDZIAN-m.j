<?php

/* https://www.php.net/manual/en/book.array.php
    https://www.w3schools.com/php/php_arrays.asp        
*/

/* Tablice proste, jednowymiarowe

    $zmienna = array(element/wartosc,element/wartosc, ... , element/wartosc);
    $zmienna = [element/wartosc,element/wartosc, ..., element/wartosc];

    Dołożenie elmentu
    $zmienna[index] = wartosc
    $zmienna[] = wartosc;

    Zmiana elementu poprzez odwołanie się do elementu tablicy i przypisanie (=) nowej wartości
    $zmienna[index] = wartosc;

*/

#Utworzenie zmiennej jako tablicy z wartościami 
$tablica = [1, 2, 3, "cztery"];
$tablica2 = array(1, 2, 3, "osiem");
$tablica = []; //taki element również utworzy nam tablicę, nie mylić z dodaniem nowego elementu!  

$uczniowe = ['Marek', 'Marcin', 'Franek', 'Małgośka'];
//aby dodać kolejny element do powyższej tablicy można to zrobić odowłując się do ostatniego indeksu albo skorzytać z indeksowania autmatycznego
$uczniowe[4] = 'Tadek'; //dopisanie przez określenie kolejnego indeksu tabeli
$uczniowe[] = 'Tadek niejadek'; //automatyczne dopisanie z kolejnym indeksem, w tym wypadku 5;    



//Wypis eleemntu tablicy

#echo $uczniowe // spowoduje błąd, poprzez echo możemy jedynie wypisywać konkretne elementy tablicy, czyli wartości
echo $uczniowe[0]; // wypisze 1 - pierwszy element tablicy tj. o indeksie 0, pamiętaj tablice domyślnie indeksowane są od 0!
echo '<br>';
echo $uczniowe[2];
echo '<br>';
#echo $tablica[10].'<br>'; //spowoduje błąd (notice) gyż nie ma takiego elementu w tablicy;



/* przydatne funkcje do wypisu tablicy w całości */
#print_r($uczniowe); //https://www.php.net/manual/en/function.print-r.php
print_r($uczniowe);
#var_dump($uczniowe); //https://www.php.net/manual/en/function.var-dump
var_dump($uczniowe);

#funkcje łączące elementy tablicy (jednowymiarowej)
#implode('string_pomiedzy_elementami',$uczniowe); //https://www.php.net/manual/en/function.implode.php
#join('string_pomiedzy_elementami',$uczniowe); //https://www.php.net/manual/en/function.implode.php
join(' ', $uczniowe);

$listaUczniow = join(', ', $uczniowe);
echo 'Lista uczniów klasy III: ' . $listaUczniow;






/*
    Tablica asocjacyjna

    Tablica asocjacyjna jest nazywana także tablicą skojarzeniową. Przechowuje ona dane parami, każdej wartości przyporządkowuje odpowiedni klucz. Aby uzyskać dostęp do danej wartości trzeba znać nazwę jej klucza. W przypadku standardowych tablic dostęp do poszczególnych elementów zyskujemy za pomocą indeksu w tablicy.
    Kluczem w tablicy asocjacyjnej może być int lub string, wartości mogą przyjmować każdy typ danych

*/

$tablicaAsocjacyjnaCennik = [
    'jajka' => 2,
    'drozdze' => 4,
    'wiśnie' => 30,
];

//dopisanie poprzez dodanie elementu z "unikalnym" indeksem                            
$tablicaAsocjacyjnaCennik['gruszki'] = 30;

//przypisanie nowej wartości dla istniejącego indeksu tabeli (napisanie wartości) lub utworzenie nowego elementu tabeli o zadanym indeksie                           
$tablicaAsocjacyjnaCennik['jajka'] = 40;

//echo $tablicaAsocjacyjnaCennik[1]; spowoduje błąd
//echo $tablicaAsocjacyjnaCennik['jajka'] -> wypisze wartość elementu tablicy o indeksie jajka;
//print_r($tablicaAsocjacyjnaCennik);

$tablicaAsocjacyjna['jeden'] = 1;
$tablicaAsocjacyjna['dwa'] = 2;
$tablicaAsocjacyjna[] = 'test'; //uwaga na indeks!

//Wartosci tablicy mozna wypisać ciągiem używając z pętli (o tym później) lub funcji implode() - https://www.php.net/manual/en/function.implode.php, join() https://www.w3schools.com/php/func_string_join.asp
//implode(string $separator, array $array): string

echo '<br><br>Wypis przez funkcję implode()<br>';
echo implode('<br>', $tablicaAsocjacyjnaCennik);

echo '<br><br>Wypis przez funkcję join()<br>';
echo join(' ', $tablicaAsocjacyjnaCennik);


// do zmienniej można też przypisać wynik działania powyższych funkcji czyli np. 
echo '<br>';
$wypistablicyAsocjacyjnej = implode('<br>', $tablicaAsocjacyjnaCennik);
echo $wypistablicyAsocjacyjnej;



// tablica wielowymiarowa
$wielowymiarowa =  [
                        [1, 2, 3],
                        [4, 5, 6]
                    ];

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
    ]
];


// odwołanie do elementu tablicy wielowymiarowej
//echo $wielowymiarowa[0] // spowoduje błąd bo pod tym indeksem znajduje się innna tablica
echo $wielowymiarowa[0][1];
echo $cars['Audi']['engine'];

$wielowymiarowaAssoc = $uczniowieKlas = [
    '1tie' => [
        1 => 'Marek',
        2 => 'Kasia',
    ],
    '2tie' => [
        1 => 'Tomek',
        2 => 'Ola',
    ]
];

#przykładowo aby wydobyć tablicę zawierającą uczniów klasy 2tie należy 
echo "Uczniowie klasy 2tie to: <br>" . implode('<br>', $uczniowieKlas['2tie']);



/* funkcje do sortowana tablic 

        sort() - sortuje tablice w kolejności rosnącej
        rsort() - sortuje tablice w kolejności malejącej

        asort() - sortuje tablice asocjacyjne w kolejności rosnącej, według wartości
        ksort() - sortuje tablice asocjacyjne w kolejności rosnącej, według klucza
        arsort() - sortuje tablice asocjacyjne w kolejności malejącej, według wartości
        krsort() - sortuje tablice asocjacyjne w kolejności malejącej, według klucza
    */


$tablica = [8, 1, 5, 2, 3, 4];
asort($tablica);
print_r($tablica);


$wielowymiarowaAssoc = $uczniowieKlas = [
    '1tie' => [
        1 => 'Marek',
        2 => 'Kasia',
    ],
    '2tie' => [
        1 => 'Tomek',
        2 => 'Żaneta',
        2 => 'Ola',
        3 => 'Tadeusz',
        4 => 'Łucja'
    ]
];
asort($uczniowieKlas['2tie']);
echo "Uczniowie klasy 2tie to: <br>" . implode('<br>', $uczniowieKlas['2tie']);


$uczniowieKlas = [
    1 => 'Tomek',
    2 => 'Żaneta',
    3 => 'Ola',
    4 => 'Tadeusz',
    13 => 'Ęczysław',
    10 => 'Łucja'
];

// asort($uczniowieKlas['2tie']);
// echo "Uczniowie klasy 2tie to: <br>".implode('<br>',$uczniowieKlas['2tie']);
echo "<br>Uczniowie klasy 2tie to: <br>" . implode('<br>', $uczniowieKlas);
echo setlocale(LC_COLLATE, 'pl_PL.utf8'); //na serwerze nie windowsowym :)
echo setlocale(LC_ALL, ''); //na serwerze windowsowym, choć i tak nie działa :D
asort($uczniowieKlas, SORT_LOCALE_STRING); // następnie
echo "<br><br>Uczniowie klasy 2tie to: <br>" . implode('<br>', $uczniowieKlas);
//print_r($uczniowieKlas);




/* wybrane funkcje dla tablic i pochodne */
//https://www.php.net/manual/en/book.array.php

//explode, count | sizeof , in_array , sort , array_diff , array_merge , array_keys , array_values ,shuffle, array_slice

/*
 explode(string $separator, string $string, int $limit = PHP_INT_MAX): array - tworzy tabelę ze stringu względem separatora,  
 https://www.php.net/manual/en/function.explode.php
*/

$string =  "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, atque.";
$tablica = explode(' ', $string);
print_r($tablica);
echo '<br>';

//count i sizeof - liczenie elmentów tablicy
echo 'Liczba elementów tabeli to ' . count($tablica) . '<br>';
echo 'Liczba elementów tabeli to ' . sizeof($tablica) . '<br>';

//in_array() - sprawdza czy wartość szukana istnieje w wartościach    
$wartosc_szukana = "lorem";
var_dump(in_array($wartosc_szukana, $tablica));

//key_exists() - sprawdza czy wartość szukana istnieje w kluczach     
$wartosc_szukana = 0;
var_dump(key_exists($wartosc_szukana, $tablica));

//aby sprawdzić czy istnieje element tablicy o zadanym kluczu można użyć funkcji isset(), która sprawdza czy zmienna jest zadeklarowana i posiada wartość inną niż null
var_dump(isset($tablica[34]));

//array_merge() - łączenie tabel
$t1 = [1, 2, 3];
$t2 = [1, 4, 5];
$t3 = array_merge($t1, $t2);
print_r($t3);

$t1 = ['a1' => 1, 'a2' => 2];
$t2 = ['a1' => 5, 'a5' => 5];
$t3 = array_merge($t1, $t2); //uwaga na kolejność :)
print_r($t3);
echo '<br>';
$t3 = array_merge($t2, $t1); //uwaga na kolejność :)
print_r($t3);

//array_values($tablica) => zwraca wartości tablicy (Array) 
$uczniowieKlas = [
    1 => 'Tomek',
    2 => 'Żaneta',
    3 => 'Ola',
    4 => 'Tadeusz',
    13 => 'Ęczysław',
    10 => 'Łucja'
];
echo 'Wartości tablicy: ' . join(', ', array_values($uczniowieKlas));

echo '<br>';

//array_keys($tablica) => zwraca klucze tablicy (Array)
$uczniowieKlas = [
    1 => 'Tomek',
    2 => 'Żaneta',
    3 => 'Ola',
    4 => 'Tadeusz',
    13 => 'Ęczysław',
    10 => 'Łucja'
];
echo 'Klucze tablicy: ' . join(', ', array_keys($uczniowieKlas));

#tablica z range()
$przypadkowe = range(1, 100, 10);
echo '<br>';
print_r($przypadkowe);


/* shuffle() - mieszamy elementy */
echo '<br>';
shuffle($przypadkowe); //funkcja mieszająca tablice
print_r($przypadkowe);


//Uwaga! na tablice assocjacyjne i ich klucze
$t1 = [
    'a1' => 1,
    'a2' => 2,
    'a3' => 3,
];
print_r($t1);
#mieszamy
echo '<br>';
shuffle($t1); //funkcja mieszająca tablice
print_r($t1);


/* array_slice() */
$tab = [1,2,3,4,5,6,7,8,9,10];
$ucieta_tablica = array_slice($tab,3,4);
//$ucieta_tablica = array_slice($tab,3,4,true);
print_r($ucieta_tablica);


/* pętla froeach - dla każdego elementu - niezwykle przydatna przy tablicach zawierających dane różnego typu

foreach($tablica as $wartosc_elementu_tablicy){
    intrukcje PHP
}

*/

$people = ['Jan', 'Bartek', 'Marta', 'Aleksander', 'Ola', 'Kasia'];

foreach ($people as $person) {
    echo $person . ' z Warszawy' . '<br>';
}


/* foreach ze wskazaniem klucza */
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
    ]
];

foreach ($cars as $car => $part) {
    echo $car . ' ' . $part['engine'] . '<br>';
}

/* pętla w petli */
$country_names = [
    'France' => [
        'Sabine',
        'Suzanne',
        'Jeannett'
    ],
    'Poland' => [
        'Jan',
        'Maciej',
        'Dawid'
    ],
    'Deutschland' => [
        'Hermann',
        'Martin'
    ]
];

//foreach w foreachu 
foreach ($country_names as $country => $names) {
    echo 'Names of ' . $country . '<br>';
    foreach ($names as $first_name) {
        echo $first_name . '<br>';
    }
    echo '<br>';
}
