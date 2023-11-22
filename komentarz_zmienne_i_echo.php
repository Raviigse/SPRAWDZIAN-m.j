<?php 

# Komentarz jednoliniowy
//Komentarz jednoliniowy

/* 
    Komentarz
    wieloliniowy 
*/

/* 
    Zmienne:
    https://www.php.net/manual/en/language.variables.php
    https://www.w3schools.com/php/php_variables.asp
    
    Zasady tworzenia zmiennych:
    ----------------------------
    Zmienna zaczyna się od znaku $, po którym następuje nazwa zmiennej
    Nazwa zmiennej musi zaczynać się od litery lub znaku podkreślenia
    Nazwa zmiennej nie może zaczynać się od cyfry
    Nazwa zmiennej może zawierać tylko znaki alfanumeryczne i podkreślenia (A-z, 0-9 i _) - zmienne bez poslkich znaków,operatorów
    W nazwach zmiennych rozróżniana jest wielkość liter ($age i $AGE to dwie różne zmienne)
    Typowanie zmiennych odbywa się automatycznie (przeważnie :P)
    
    
    Zasięg poszczególch zmiennych -> zasieg_zmiennych.php
*/

/*

$BłędnieZdefiniowaniaZmienna;
$45ab;
$3+test;

*/
# Tworzenie zmiennych i definiowanie stałych oraz przypisywanie im wartości
# Typy zmiennych : https://www.w3schools.com/php/php_datatypes.asp
# https://www.php.net/manual/en/language.types.php

$imie = "Marcin"; //uworzenie zmienniej o nazwie $imie z wartością typu string
$Imie = 'Marjan';

$x = 30; //zmianna typu integer (int)
$y = 30.5; //zmienna typu float, uwaga! Zmienne typu float zawsze z kropką nie z przecinkiem.

//tworzenie zmienniej jako pustej tablicy
$tablica=[];
$tablica = array();

#tworzenie zmiennej z przypisaną tablicą (wraz z wartościami)
$tablica = [1,2,3,"cztery"];
$tablica3 = array(1,2,3,"osiem");

//przypisywanie | zmiana konrketnych indeksów tablicy
$tablica3[0]=1;
$tablica3[1]=2;

//tworzenie elementów tablicy z automatycznym przypisaniem indeksu
$tablica4[]='jeden';
$tablica4[]='dwa';

#Definicje zmiennej typu NULL (nic)
$null = NULL;

#Definicja zmiennej typu boolean (prawda / fałsz)
$bool = true;
$bool = false;

/* stworzenie lub przypisanie wartości kilku zmiennym na raz */
$pierwsza = $druga = $trzecia = '0';

#wypis zmienniej wraz z infomracjami szczegółowymi - funkcja var_dump();
var_dump();


/*
    definiowanie stałej - czyli "zmienniej", której raz ustalonej wartości nie można już zmienić

    Stała może przyjmować różne typy zmiennych np. string, tablicę, int czy float, z uwagi jednak że jest definiowana tylko raz, typu nie może zmieniać.

    Nazwy stałych zapisujemy dużymi literami.
*/

define("NAZWA_ZMIENNEJ", "Moja pierwsza zmienna stała");
define("STALA_TABLICA", array(1,2,3));
define("DRUGA_STALA", $x);
#define("DRUGA_STALA", 'abc'); //spowoduje błąd

/* zmienne superglobalne, specjalne

    Super zmienne globalne to zmienne wbudowane, które są zawsze dostępne we wszystkich zakresach.
                            
    $GLOBALS - to super globalna zmienna PHP, która służy do uzyskiwania dostępu do zmiennych globalnych z dowolnego miejsca w skrypcie PHP (również z poziomu funkcji lub metod).
    
    $_SERVER - super globalna zmienna PHP, która przechowuje informacje o nagłówkach, ścieżkach i lokalizacjach skryptów, zawiera również informacje systemowe oraz m.in. IP hosta wywołującego skrypt.
    
    $_REQUEST -  super globalna zmienna PHP, która służy do zbierania danych po przesłaniu formularza HTML.
    
    $_POST - to super globalna zmienna PHP, która służy do zbierania danych z formularza po przesłaniu formularza HTML za pomocą metody „post”. $_POST jest również powszechnie używany do przekazywania zmiennych.
    
    $_GET -  to super globalna zmienna PHP, która służy do zbierania danych z formularza po przesłaniu formularza HTML za pomocą metody="get".
    $_GET może również zbierać dane przesłane w adresie URL.
    
    $_FILES - tablica zmiennych dla pilków przesłanych przy użyciu methody post
    
    $_ENV - tablica asocjacyjna zawierająca dane zmianne środowiskowe (środowiska serwera)
    
    $_COOKIE - tablica asocjacyjna zawierająca informacje o ciasteczkach
    
    $_SESSION - Tablica asocjacyjna zawierająca zmienne sesji dostępne dla bieżącego skryptu. Więcej informacji na temat sposobu użycia tej funkcji można znaleźć w dokumentacji funkcji sesji.

    https://www.w3schools.com/php/php_superglobals.asp
    https://www.php.net/manual/en/reserved.variables.php
*/

    var_dump($_SERVER);
    var_dump($_REQUEST);                           
    var_dump($_GET);                       
    var_dump($_POST);                       
    var_dump($_ENV);                       
    var_dump($_SESSION);                       
    var_dump($_COOKIE);                       
                          


    

/* funkcje wypisujące

PHP echo() i print()

Echo i print są mniej więcej takie same, obydwie służą do wysyłania danych na ekran.
Różnice są niewielkie: echo nie zwraca wartości, podczas gdy print zwraca wartość 1, więc można go używać w wyrażeniach. echo może przyjmować wiele parametrów (chociaż takie użycie jest rzadkie), podczas gdy print może przyjmować jeden argument. 
Echo jest nieznacznie szybsze niż print.

*/

//Wypis prostego stringu
echo "Zwykły ciąg tekstowy";
print 'Zwykły ciąg tekstowy';

//wypis kilu stringów na raz

echo "Ciąg tekstowy1", "Ciąg tekstowy2", "Ciąg tekstowy3",'<br>';

/* 
    Pamiętaj, że wypisywanie cudzysłowia w stringu zawartym w cudzysłowiach spowoduje błąd, podobnie będzie z apostrofami, możesz natomiast stosować ' w "stringach" oraz " w 'stringach'.
*/

 echo "'Test wypisu z apostrofami'";
 echo '<br>';
 echo '"Test wypisu cudzysłowiami"';
 echo '<br>';

 //echo "To spowoduje "" błąd";
 //echo 'To też spowoduje błąd'';
 echo 'Dzięki temu możemy w zapisie apostrofowym użyć "" np. do osadzenia obrazka <img src="img/img_tree.png" alt="/">';


$zmienna = 10;
echo $zmienna; // wypis wartości zmiennej/wyniku działania funkcji, pod warunkiem że jest ona typu int, float, lub string

echo '<br>';
echo '<br>';

define('STALA','123');
echo STALA; //wypis zmiennej sałej
//define('STALA', 123); spowoduje błąd

/*
    Ciąg tekstowy ze zmienna
    Abyt wypisać zmienna w ciągu tekstowym, ciąg ten musi być umieszczony w cudzysłowiach "", jeżeli umieściz zmienną w ciągu ograniczonym apostrofami wypiszę się nazwa zmiennej a nie wartość zmiennej. Wynika to z tego, że w PHP apostrofy mają większą siłę od cudzysłowia.
*/

$imie = "Marcin";
$Imie = 'Marcelina';

echo "Tak możemy użyć zmiennych w stringu. Moje imie to: $imie<br>";
echo 'Taki jest efekt gdy probujesz wypisać zmienną w apostrofach $imie<br>';

echo "Możemy też użyć kilu zmiennych np. Moje imie to: $imie a nie $Imie !<br>";

echo "Jeżeli zmienna stoi w połączeniu ze stringiem (doklejony sting do zmiennej) msi dostać 'wąsy' Moje imie {$imie}jest fajne.<br>";

echo "Rozwiązaniem jest tu konkatenacja czyli użycie operatora łączenia '.'";

/*
    Programując w PHP, bardzo często zachodzi potrzeba połączenia ze sobą dwóch, lub więcej stringów. Można to zrobić na różne sposoby.
    Aby wypisać zmienną w ciągu z '', lub połączyć ze sobą 2 zmienne, lub zmienną ze stringiem należy użyc operatora łączenia / konkatenacji .

    Operatory konkatenacji 

    . Połączenie $txt1 . $txt2 Połączenie $txt1 i $txt2
    .= Przypisanie konkatenacji $txt1 .= $txt2 Dołącza $txt2 do $txt1


*/    


$imie = "Wojtek";
$zmienna1 = "Moje";
$zmienna2 = "imie";
$zmienna3 = $imie;

echo $zmienna1.$zmienna2.$zmienna3; //połączenie zmiennych z użyciem operatora . 
echo '<br>';
echo $zmienna1.' '.$zmienna2.' '.$zmienna3; //polączenie zmiennych ze stringiem z użyciem operatora .
echo '<br>';

$zmienna4 = '<br>'.$zmienna1.' '.$zmienna2.' '.$zmienna3;
echo $zmienna4;

echo '<br><br>';

$obrazekSrc = "img/img_tree.png";
echo '<img src="$obrazekSrc">'; //zapis nieprawidłowy
echo '<img src="'.$obrazekSrc.'" alt="prawidłowy obrazek">'; //zapis prawidłowy

// konkatenacja z przypisaniem
$appendConcatenation = 'String';
$appendConcatenation .= ' dokładka do stringu'; //daje to samo co $string = $string.' dokładka do stringu';
echo $appendConcatenation;

/* wypis wieloliniowy */

echo "Lorem ipsum dolor sit amet consectetur
        Lorem ipsum dolor sit amet consectetur
        fdsafdasf
        fdasf
        df
        dsaf
        dasf
        asd

        Lorem ipsum dolor sit amet consectetur";

//wypisuj do czasu aż nie napotkasz END

echo <<< PASZTET

 Lorem ipsum dolor sit amet consectetur
 Lorem ipsum dolor sit amet consectetur

KONIEC;
FDSAFDSAFSD


FDS
PASZTET;


/* Bonus :)  - zmienna ze zmiennej, zmienna przez referencję */


$pierwszaZmienna = "Olek"; //definicja zmiennej typu string
$drugaZmienna = "Marjan";
$pierszaZmienna = $drugaZmienna;
echo '<br>'.$pierwszaZmienna;
echo '<br>'.$drugaZmienna;

//Referencja przydatna lecz groźna rzecz
$pierwszaZmienna = "Olek"; //definicja zmiennej typu string
$drugaZmienna = "Marjan";
$pierszaZmienna = &$drugaZmienna;
$pierszaZmienna = "Wojtek";
echo '<br>'.$pierwszaZmienna;
echo '<br>'.$drugaZmienna;


/* Zmienne ze "zmiennych" */

  $Bar = "a";
  $Foo = "Bar";
  $World = "Foo";
  $Hello = "World";
  $a = "Hello";

  $a; //Returns Hello
  $$a; //Returns World
  $$$a; //Returns Foo
  $$$$a; //Returns Bar
  $$$$$a; //Returns a

  $$$$$$a; //Returns Hello
  $$$$$$$a; //Returns World




