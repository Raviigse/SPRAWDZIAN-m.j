<?php 

// https://www.w3schools.com/php/php_operators.asp

/* Operatory konkatenacji 

. Połączenie $txt1 . $txt2 Połączenie $txt1 i $txt2
.= Przypisanie konkatenacji $txt1 .= $txt2 Dołącza $txt2 do $txt1

*/

/*
Operatory arytmetyczne
--------------------------------
+ dodawanie
- odejmowanie
* mnożenie
/ dzielenie
% modulo (reszta z dzielenia)
** potęgowanie

Przy okazji 2 przydatne funkcje
sqrt($liczba) -> funkcja liczy pierwiastek 2 stopnia z liczby
pow(liczba, potęga) -> funkcja do obliczania dowolnej potęgi liczby
*/

$x = 2;
$y = 10;
echo 2+4;
echo $x+$y;
echo '<br>';
echo $x-$y;
echo '<br>';
echo $x*$y;
echo '<br>';
echo $x%$y;
echo '<br>';
echo $x**$y;
echo '<br>';
echo sqrt(4);
echo '<br>';
echo pow(2,1/10);
echo '<br>';
echo pow(8,1/3);
echo '<br>';
echo 8**(1/3);

/* 
Operator inkrementacji i dekrementacji (dodawania / odejmowania 1 do elementu)
++$x 	Pre-increment 	Dodaje do $x jeden i następnie zwraca $x 	
$x++ 	Post-increment 	Zwraca $x i dodaje do niego 1
--$x 	Pre-decrement 	Odejmuje od $x jeden i zwraca $x
$x-- 	Post-decrement 	Zwraca $x i odejmuje od niego jeden
*/

$x = 100;

echo $x.'<br>';
++$x;
echo $x.'<br>';
$x++;
echo $x.'<br>';
--$x;
echo $x.'<br>';
$x--;
echo $x.'<br>';

$x = 100;
echo '++$x '.++$x.'<br>';
echo '$x++ '.$x++.'<br>';
echo '--$x '.--$x.'<br>';
echo '$x-- '.$x--.'<br>';


/*
Operatory przypisania
--------------------------------
x = y 	x = y 	    Przypisanie wartości po prawej do zmiennej po lewej 	
x += y 	x = x + y 	Dodawanie 	
x -= y 	x = x - y 	Odemowanie 	
x *= y 	x = x * y 	Mnożenie 	
x /= y 	x = x / y 	Dzielenie 	
x %= y 	x = x % y 	Modulo - reszta z dzielenie
*/

$x = 2; $y = 10;
echo $x += $y;
echo '<br>';

$x = 2; $y = 10;
echo $x -= $y;

echo '<br>';
$x = 2; $y = 10;
echo $x *= $y;

echo '<br>';
$x = 2; $y = 10;
echo $x %= $y;

echo '<br>';
$x = 2; $y = 10;
echo $x /= $y;

/*
    Operatory łączenia (konkatenacji) stringów
    --------------------------------
    . 	Concatenation 	$txt1 . $txt2 	Concatenation of $txt1 and $txt2 	
    .= 	Concatenation assignment 	$txt1 .= $txt2 	Appends $txt2 to $txt1
*/
$stirng1 = "String1";
$string2 = "String2";
echo $string.$string2;
echo 'Możemy używać także do łączenia'." ".'<br>i łączenia'.$string1."<br>";

//konatenacja z przypisaniem
$string1 .= $string2;
echo $string1;


/* Operatory tablic
--------------------------------
The PHP array operators are used to compare arrays.

+ 	 Union 	        $x + $y     Union of $x and $y 	Operator Union dołącza tablicę po prawej stronie dołączoną do tablicy po lewej stronie. ; Jeśli 
                                klucz istnieje w obu tablicach, użyte zostaną elementy z tablicy po lewej stronie, a pasujące elementy z tablicy po prawej stronie zostaną zignorowane.

== 	 Equality 	    $x == $y 	Returns true if $x and $y have the same key/value pairs 	
===  Identity 	    $x === $y 	Returns true if $x and $y have the same key/value pairs in the same order and of the same types 	
!= 	 Inequality 	$x != $y 	Returns true if $x is not equal to $y 	
<> 	 Inequality 	$x <> $y 	Returns true if $x is not equal to $y 	
!==  Non-identity 	$x !== $y 	Returns true if $x is not identical to $y

Powyższych operatorów będziemy używać głównie w instrukcjach warunkowych lub pętlach. 
Możemy jednak sprawdzić ich działanie używając funkcji var_dump();

*/

$one = ["element11","element12"];
$two = ["element21","element22","element23"];
//$one = $two;

$three = $one + $two;
print_r($three);
echo '<br>';
echo var_dump($one == $two).'$x == $y<br>';
echo var_dump($one === $two).'$x === $y<br>';
echo var_dump($one != $two).'$x != $y<br>';
echo var_dump($one <> $two).'$x <> $y<br>';
echo var_dump($one !== $two).'$x !== $y<br>';


//operatory działają także na tablicach asocjacyjnych
$one = ['one'=>"element11",'two'=>"element12"];
$two = ['one'=>"element21",'two'=>"element22",'three'=>"element23"];
//$one = $two;

$three = $one + $two;
print_r($three);
echo '<br>';
echo var_dump($one == $two).'$x == $y<br>';
echo var_dump($one === $two).'$x === $y<br>';
echo var_dump($one != $two).'$x != $y<br>';
echo var_dump($one <> $two).'$x <> $y<br>';
echo var_dump($one !== $two).'$x !== $y<br>';


/*
Operatory porównawcze PHP są używane do porównywania dwóch wartości ze sobą (liczba lub ciąg znaków):
--------------------------------

==      Equal 	                    $x == $y 	Zwraca wartość true, jeśli $x jest równe $y 	
=== 	Identical 	                $x === $y 	Zwraca wartość true, jeśli $x jest równe $y i są tego samego typu 	
!= 	    Not equal 	                $x != $y 	Zwraca wartość true, jeśli $x nie jest równe $y 	
<> 	    Not equal 	                $x <> $y 	Zwraca wartość true, jeśli $x nie jest równe $y 	
!== 	Not identical 	            $x !== $y 	Zwraca wartość true, jeśli $x nie jest równe $y lub nie są tego samego typu	
> 	    Greater than 	            $x > $y 	Zwraca wartość true, jeśli $x jest większe niż $y 	
< 	    Less than 	                $x < $y 	Zwraca wartość true, jeśli $x jest mniejsze niż $y 	
>= 	    Greater than or equal to 	$x >= $y 	Zwraca wartość true, jeśli $x jest większe lub równe $y	
<= 	    Less than or equal to 	    $x <= $y 	Zwraca wartość true, jeśli $x jest mniejsze lub równe $y 	
<=> 	Spaceship 	                $x <=> $y 	Zwraca liczbę całkowitą mniejszą, równą lub większą od zera, w zależności od tego, czy $x jest
                                                mniejsze, równe lub większe niż $y. Wprowadzono w PHP 7.
*/

$x = 123;
$y = '123';
var_dump($x == $y);
var_dump($x === $y);





/*
Operatory logiczne PHP - używane głównie w instrukcjach warunkowych, łączące operatory porónawcze
--------------------------------
Operatory logiczne PHP są używane do łączenia strukturalnych.

and     Oraz/i      $x and $y       True, jeśli zarówno $x, jak i $y są prawdziwe
or      Lub         $x or $y        True, jeśli $x lub $y jest prawdą
xor     Xor         $x xor $y       Prawda, jeśli prawdą jest albo $x, albo $y, ale nie oba

&&      Oraz/i      $x && $y        Prawda, jeśli zarówno $x, jak i $y są prawdziwe
||      Lub         $x || $y        Prawda, jeśli wartość $x lub $y jest prawdziwa
!       Nie         !$x             Prawda, jeśli $x nie jest prawdą                   

ex. */

if($x and $y>3)
    echo $x.' jest prawdą i y>0';
;





