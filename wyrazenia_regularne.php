<?php 

/*
    https://www.php.net/manual/en/reference.pcre.pattern.syntax.php
    https://www.w3schools.com/php/php_regex.asp
    https://www.p-programowanie.pl/php/budowanie-wyrazen-regularnych-php
    https://regex101.com/
    
    https://www.regular-expressions.info/refmodifiers.html - modyfikatory 

    Wyrażenia regularne pełnią istotną rolę w PHP. Umożliwiają one opisywanie i przetwarzanie długich ciągów znaków. Dzieje się to na zasadzie porównania danego ciągu znaków z określonym wzorem, ułożonym przez programistę. I to te właśnie wzory są wyrażeniami regularnymi. 

    Dzięki nim, możliwe jest wykonanie wielu operacji na raz np. wyszukiwanie określonych elementów, walidacja adresów email, walidacja adresów URL oraz zamiana poszczególnych fragmentów strony.

    Składnia wyrażenia regularnego wymaga aby wyrażenie relgularne było zamknięte w "ogranicznkach". Ogranicznikami może być dowolny znak niealfanumeryczny, nie backslash \ oraz nie znak biały. Często uzywanymi "ogranicznikami" wyrażeń są "/", "#", "%". 

    przykłady:
    /foo bar/
    #^[^0-9]$#
    +php+
    %[a-zA-Z0-9_-]%

    Siła wyrażeń regularnych wynika z możliwości uwzględniania we wzorcu alternatyw i powtórzeń. Są one kodowane we wzorze za pomocą metaznaków, które nie reprezentują się same, lecz są interpretowane w jakiś specjalny sposób.

    Istnieją dwa różne zestawy metaznaków: te, które są rozpoznawane w dowolnym miejscu wzorca, z wyjątkiem nawiasów kwadratowych, oraz te, które są rozpoznawane w nawiasach kwadratowych. Poza nawiasami kwadratowymi metaznaki są następujące:

    \       ogólny znak ucieczki z kilkoma zastosowaniami
    ^       początek tematu (lub wiersza w trybie wielowierszowym)
    $       koniec tematu lub przed kończącym znakiem nowej linii (lub końcem linii w trybie wielowierszowym)
    .       dopasowuje dowolny znak z wyjątkiem nowej linii (domyślnie)
    [       rozpocznij definicję klasy znaków
    ]       koniec definicji klasy znaków
    |       rozpoczęcie alternatywnego oddziału
    (       rozpocznij wzór podrzędny
    )       koniec wzorca
    ?       rozszerza znaczenie (, także kwantyfikatora 0 lub 1, powoduje również, że zachłanne kwantyfikatory stają się leniwe (patrz powtórzenie)
    *       0 lub więcej kwantyfikatora
    +       1 lub więcej kwantyfikatorów
    {       start kwantyfikatora min/max
    }       koniec kwantyfikatora min/max

    Część wzoru ujęta w nawiasy kwadratowe nazywana jest klasą znaku. W klasie znaków jedynymi metaznakami są:
    \       ogólny znak ucieczki
    ^       zanegowaj klasę, ale tylko jeśli pierwszy znak
    -       wskazuje zakres znaków


    "\" backshlash-a będziemy używali do oznaczania znaków w wyrażeniu, które są uważane za specjalne (metaznaki).
    Jeżeli więc będziemy szukali kropki to zapiszemy "\." a nie "." 

    Upraszczając skupimy się na użycziu poniższych elementów stworzonych z powyższych metaznaków
    

    ^ 	        Operator początku ciągu znaków. 	            prawostronny
    $ 	        Operator końca ciągu znaków. 	                lewostronny
    . 	        Operator jednego dowolnego znaku. 	            n/d
    [a-z] 	    Dowolne litery od a do z. 	                    n/d
    [A-Z] 	    Dowolne litery od A do Z. 	                    n/d
    [0-9] 	    Dowolne cyfry od 0 do 9. 	                    n/d
    [^ ] 	    Operator negacji zbioru. 	                    n/d

    * 	        Operator powtórzenia 0 lub więcej razy. 	    lewostronny
    + 	        Operator powtórzenia 1 lub więcej razy. 	    lewostronny
    {x} 	    Operator powtórzenia dokładnie ‚x’ razy. 	    lewostronny
    {x,y} 	    Operator powtórzenia minimum ‚x’ i maksimum     lewostronny
                ‚y’ razy. 	
    ? 	        Operator powtórzenia 1 lub 0 razy. 	            lewostronny


    | 	        Operator alternatywy. 	                        obustronny
    ( ) 	    Wyrażenie wewnątrz nawiasów jest atomem         n/d
                (rozpatrujemy je jako całość). To takie
                "podwyrażenie" reguralne 	

    (? )            
    (?: )
                
    \s 	        Spacja
    \S          Dowolny znak nie bedący spacją
    \n 	        Znak nowej linii
    \d          Cyfra
    \D          Dowolny znak nie będący cyfrą
    \t          Tabulator
    \w          jakiekolwiek słowo
    \W          jakikolwiek znak nie będący słowem
    \v          dowolny biały znak vertykalny
    \V          dowlny znak ale nie biały vertylakny
    \h          dowolny biały znak vertykalny
    \H          dowlny znak ale nie biały vertylakny



    //przykłady

    //funkcje do użycia wyrażeń regularnych
    preg_match_all — Perform a global regular expression match
    preg_match — Perform a regular expression match
    preg_replace — Perform a regular expression search and replace
    preg_split — Split string by a regular expression






