<?php
/*
    Zasięg zmiennych - https://www.w3schools.com/php/php_variables_scope.asp

    PHP definiuje 3 postawowe zasięgi zmiennych:
    - local -> zmienna o zasięgu lokalnym, lokalnie w ramach jednej funkcji / pętli 
    - global -> zasięg globalny - zmienna istnieje w zakresie bieżącego dokumentu (nie w zasięgach lokalnych, chyba że spsobem)
    - static -> Zmienna statyczna istnieje tylko w lokalnym zakresie funkcji, ale nie traci swojej wartości, gdy wykonanie programu opuści ten zakres

*/    


$a = 1; /* zmienna o zasięgu globalnym  */ 
function test()
{ 
    echo $a; /* odwołanie do zmiennej loklanej - spowoduje błąd */ 
} 
test();


/*odwołoanie w zasięgu loklanym do zmiennej o zasięgu globalnym przes słowo global */

$a = 1;
$b = 2;

function Sum()
{
    global $a, $b;
    $b = $a + $b;
} 
Sum();
echo $b;

/* lub tablicę $GLOBALS :) */

$a = 1;
$b = 2;

function Sum1()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
} 

Sum1();
echo $b;



 /* static and non static difference */

function test()
{
    $a = 0;
    //static $a = 0;
    echo $a;
    $a++;
}

test();
test();
test();


?>