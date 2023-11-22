<?php
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
//    $x = "Dominika";
//    echo $GLOBALS['x'];
//    $GLOBALS['y'] = 'Wojtek';
//    echo $y;
//   var_dump($GLOBALS);
 

// foreach($_SERVER as $co =>$value){
//     echo '$_SERVER["'.$co.'"]' . ' => '.$value.'<br>';
// }


var_dump($_REQUEST);


var_dump($_GET);

foreach($_GET as $nazwaZmiennej =>$wartosc){
    echo $nazwaZmiennej.' => '.$wartosc.'<br>';
}







//var_dump($_SERVER);
// var_dump($_REQUEST);                           
// var_dump($_GET);                       
// var_dump($_POST);                       
// var_dump($_ENV);                       
// var_dump($_SESSION);                       
// var_dump($_COOKIE);          