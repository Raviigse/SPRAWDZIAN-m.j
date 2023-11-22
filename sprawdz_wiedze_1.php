<?php 
#0 Zakomentuj poniższe linie kodu wykorzystując wszytkie znane Ci sposoby (każdą inaczej)

//$x = 1;

#$y = 4;

/*echo <<< END
    wielo
    poziomowy
    tekst<br><br>
END;*/

#1. Wskaż niepoprawnie utworzone zmienną(e) ze zbioru: $_12a, $12a, $a12, $początek, $TESTOWA, $wynik.dzialania i wypisz je w poniższym zdaniu za pomocą funkcji echo

echo "Niepoprawne zmienne to:",'$12a',' $początek','$_12';
echo "<br>";

#2. Utwórz dowolnie nazwane zmienne i przypisz do nich: wartość typu boolean, "nic"/pustą, integer, float, double, array. Poniżej wypisz kolejno zminne używając odpowiedniej funkcji, która pokaże informacje o zmiennej

$boolean = true;
var_dump($boolean);
echo "<br>";
$null = null;
var_dump($null );
echo "<br>";
$intiger = 30;
var_dump($intiger);
echo "<br>";
$float = 30.5;
var_dump($float);
echo "<br>";
$double = 20.58;
var_dump($double);
echo "<br>";
$array = [1,2,3,4];
var_dump($array);
echo "<br>";

#3. Utwórz zmienną $x oraz $y o dowolnych wartościach liczbowych i wykonaj na nich działania: dodawania, odejmowania, potęgowania, pierwiastowania, modulo. Wyniki każdego z działań wypisz odpowiednią funkcją. 
$x=10;

$y=23;

echo $x + $y ;
echo"<br>";
echo $x - $y ;
echo"<br>";
echo $x ** $y ;
echo"<br>";
echo sqrt($x) ;
echo"<br>";
echo sqrt($y) ;
echo"<br>";
echo $x + $y ;
#4. Utwórz zmienną $X o wartości 23.5 a następnie korzystjąc z operatorów przypisania wykonaj dla niej kolejno działania +0.5, -20, *4, **2
#ostatni wynik zapisz do zmiennej $Y i wykonaj na niej inkrementację oraz dekrementację korzystając z odpowiednich operatorów wykonujących działania po wypisaniu zmiennej.
$x = 23.5;

   $y=$x+0.5 ;
   
   echo $y;
   echo"<br>";
   $y=$x-20 ;
   
   echo $y;
   echo"<br>";
   $y=$x*4 ;
   
   echo $y;
   echo"<br>";
   $y=$x**2 ;
   
   echo $y;
   echo"<br>";

   echo $y++;
   echo"<br>";

   echo $y--;
   echo"<br>";

# 5. Korzystając z poniższych zmiennych ułóż i wypisz funkcją echo (korzystając z odpowiedniego operatora) tak by zdanie miało logiczną treść. Zdanie oczywiście należy wymyślić. Należy użyć wszystkich zmiennych! 

$imie = 'Grzegorz';
$co = 'rower';
$gdzie = 'las';
$liczba = 23.5;

echo "$imie szedł przez $gdzie bo szedł na $co i miał $liczba zł";
echo"<br>";

//Wypisz to samo zdanie, ale zamiast wartości zmiennych wypisz ich nazwy wraz z $;
echo "$imie szedł przez $gdzie bo szedł na $co i miał $liczba zł";
echo"<br>";
//Wypisz to samo zdanie używając zmiennych pomiędzy "" bez spacji. Oznacz odpowiednio zmienne aby je wypisać
echo"{$imie}szedłprzez{$gdzie}boszedłna{$co}imiał{$liczba}zł";


#6. Korzystając z odpowiedniej funkcji wypisz poniższą tablicę (rozdzielając liczby przecinkiem) w zdaniu rozpoczętym poniżej
$liczby = [1, 23, 6 , 18, 52, 9];
echo "W dzisiejszym losowaniu lotto wylosowano liczby:".implode(', ',$liczby);
echo"<br>";



/* Dodatkowo: 
a) posotruj tablicę $liczby rosnąco i malejąco za każdym darem wypisując wynik jak powyżej.*/ 
asort($liczby);
echo "W dzisiejszym losowaniu lotto wylosowano liczby: ".implode(', ',$liczby) ;
echo"<br>";

/*b) zastosuj na tablicy funkcję losującą shuffle() i wypisz wyniki*/
shuffle($liczby); 
print_r($liczby);
echo"<br>";
/*c) Wypisz liczbę elementów tablicy korzytając z odpowiedniej funkcji*/
echo count($liczby);
echo"<br>";




//7. Utwórz zmienną $t i przypisz do niej tablicę dowolnych wartościach typu string (min 3 wartości) i wypisz ją funkcją print_r()
//następnie: 
    $t = ['bartek','marek','fabian'];
    print_r($t);
    echo"<br>";

    //a) wypisz 2 element tablicy, 

    echo $t[1];
    echo"<br>";
    //b) dodaj kolejny element tablicy korzystając z funkcji "automatycznej indeksacji" dla nowego elementu "[]" i wypisz wszystkie elementy tabeli korzystając z funkcji implode()
     $t[] = 'pawel';
      echo implode(', ',$t); 
      echo"<br>";
   // c) zmień wartość pierwszego elementu na dowolny i wypisz go
    $t[2]= 'olek';
    print_r($t);
    echo"<br>";



//8. Utwórz tablicę asocjacyjną, która będzie zawierała pary zmiennych 'autor' => 'tytuł książki'. Zarówno autorzy jak i tytuły mogą być zmyślone. 
      //Tablica powinna zawierać przynajmniej 3 elementy. Tablicę przypisz to zmiennej $tA. 
      //Następnie:

      $tA=[
        'Steve Jobs' => 'Elfy',
        'Habibi' => 'Psy',
        'Taylor Swift' => 'Orangutany'
      ];


      //a) Wypisz tablicę za pomocą funkcji print_r()
      print_r($tA);
      echo"<br>";
      //b) Wypisz tytuł dzieła 2 autora
      echo $tA['Habibi'];
      echo"<br>";
      
      //c) Dodaj nowy element tablicy bez zmiany samej definicji tablicy.
      $tA['John Knok'] = 'Osly';
      print_r($tA);
      echo"<br>";
      //d) Korzystając z funkcji foreach wypisz wszystkie tytuły książek występujace w tablicy.
      
      foreach($tA as $autor => $ksiazka){
      echo $ksiazka;                    
      echo"<br>";
      };

      
      foreach($tA as $autor => $ksiazka){
      echo $autor." ".$ksiazka;                     //wYPISUJE autora wraz z jego ksiazkami
      echo"<br>";
      };

      //e) Posortuj tablicę po tytułach (wartościach) malejąco - nie zwracaj uwagi na polskie znaki
      arsort($tA);
      print_r($tA);
      echo"<br>";
      

      //f) Posortuj tablicę po autorach (kluczach) rosnąco - nie zwracaj uwagi na polskie znaki
      ksort($tA);
      print_r($tA);
      echo"<br>";
      //f) Korzystając z funkcji foreach wypisz wszystkie pary w formacie "$Autor napisał: $tytulKsiazki", nazwy zmiennych możesz dobrać dowolnie;
      foreach($tA as $autor => $ksiazka){
      echo $autor." "."napisał"." ".$ksiazka;                     //wYPISUJE autora wraz z jego ksiazkami
      echo"<br>";
      };


//9. Zmodyfikuj utworzoną tablicę w punkcie 8 do tablicy wielowymiarowej tak aby każdy autor posiadał kilka dzieł wraz z rokiem ich wydania.
       // np. pojedynczy element powinien być zdefiniowany w taki sposób: 'Adrian Pisalski' => [1920 => "Chłopi", 1988 => "Żywot zmarłych].
      //Dodaj minimum 2 elementy tablicy. Każdy ma mieć minimum po 2 elementy w 2 wymiarze czyli tablicy zawierającej rok => tutuł.

      $tA= $Autor = $RokWydania = $Tytuł = [
        'Steve Jobs' => [
            1889 => 'Elfy',
            1978 => 'Kalikula',
            890 => 'Lwy'
        ],
        'Steve Harvey' => [
            1900 => 'Psy',
            1234 => 'Koty',
            2013 => 'Bandura'
        ],
        'Taylor Swift' => [
            2000 => 'Orangutany',
            4321 => 'Patec',
            9876 => 'Wariacik'
        ]
      ];
      print_r($tA);
      echo"<br>";
      $tA['Agatha Christie'] = [
        [ 1934  => 'Zabójstwo Rogera Ackroyda'],
        [ 1926  => 'Morderstwo w Orient Expressie'],
    ];
    
    $tA['George Orwell'] = [
        [ 1949 => 'Betlejem'],
        [ 1935 => 'Folwark zwierzęcy'],
    ];
    print_r($tA);
    echo"<br>";

    $ilosKsiazek=0;

      
     // Następnie:

     // a) Dodaj kolejnego autora (element tablicy), który będzie posiadał już tylko 1 dzieło wydane w dowolnym roku.
     $tA['Denzel Washington'] = [
        [ 1950 => '2WS']
     ];
        print_r($tA);
        echo"<br>";
        
      //e) Posortuj tablicę po tytułach (wartościach) malejąco - nie zwracaj uwagi na polskie znaki
      arsort($tA);
      print_r($tA);
      echo"<br>";
      //f) Posortuj tablicę po autorach (kluczach) rosnąco - nie zwracaj uwagi na polskie znaki
      ksort($tA);
      print_r($tA);
      echo"<br>";
     // f) Korzystając z funkcji foreach wypisz wszystkie pary w formacie "$Autor napisał: $tytulKsiazki", nazwy zmiennych możesz dobrać dowolnie;
     
     
     
   
       // b) Wypisz tytuł dzieł 2 autora korzystając z funkcji join

     // c) Wypisz tytuł dzieł 1 autora korzystając z pętli foreach

     // d) Korzystając z podwónej pętli foreach wypisz dla każdego elementu tablicy dane w formacie 
         // $nazwaAutora wydał książki:
         foreach($tA as $nazwaAutora => $liczbaTytulowKsiazek){
            echo "$nazwaAutora wydał"." ".count($liczbaTytulowKsiazek)." "."książki:<br>";
         }
         // - $TytułKsiążki "przecinek" $rokWydania.,
         foreach($liczbaTytulowKsiazek as $tytulKsiazki => $rokWydania){
            echo "$tytulKsiazki, $rokWydania<br>";
            $ilosKsiazek++;
            echo"<br>";
         }


     // e)***
      //Korzystając z podwónej pętli foreach wypisz dla każdego elementu tablicy dane w formacie 
         // $nazwaAutora wydał $liczbatytulow książek:
         // - $tytułKsiążki "przecinek" $rokWydania,

     // Pod wypisami podaj liczbę autorów i liczbę wszystkich książek.     
     echo "Liczba autorów: ".count(array_keys($tA))." "."oraz liczba książek: $ilosKsiazek";
     echo"<br>";


    //10. Dla poniższych tablic z użyciem odpowiednich operatorów:

    $t1 = [10,"11",12];
    $t2 = [11, "11", 13, 15];
    $t3 = [12, "11", 10];

    //a) przypisz do zmiennej unię tablic $t1 i $t2 oraz wypisz tą zmienną
    $ut = array_merge($t1, $t2);
    print_r($ut);
    //b) sprawdź czy $t1 i $t3 są identyczne i wypisz wynik testu
    if ($t1 === $t3){
        echo "Tablice są identyczne";
    } else {
        echo "Tablice nie są identyczne";
    }
    //c) sprawdź czy $t1 i $t3 nie są takie same i wypisz wynik testu
    if ($t1 !== $t3){
        echo "Tablice nie są takie same";
    } else {
        echo "Tablice są takie same";
    }
    //d) sprawdź czy $t1 i $t3 są takie same i wypisz wynik testu
    if ($t1 == $t3){
        echo "Tablice są takie same";
    } else {
        echo "Tablice nie są takie same";
    }
    echo"<br>";


#11 Ze zmiennej $txt utwórz tablicę fraz rozdzielając je po ",". Wykorzystaj funkcję explode();  Wypisz otrzymaną tablicę;

    $txt = "Iglo,Bułki,Papaya,Cukier trzcinowy";



    //12. Dla poniższych tablic z użyciem odpowiednich funkcji:

    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("e"=>"red","f"=>"black","g"=>"purple");
    $a3=array("a"=>"red","b"=>"black","h"=>"yellow");
    

    //a) do zmiennej przypisz wynik połączenia tablic $a1 i $a2 (array_merge()) i wypisz go
    $poloczenie = array_merge($a1, $a2);
    print_r($poloczenie);
    //b) wypisz różnicę pomiędzy tabelami $a2 i $a3 (array_diff())
    $diff = array_diff($a2, $a3);
    print_r($diff);
    //c) wypisz wszystkie wartości tablicy $a2 (array_values)
    $values = array_values($a2);
    print_r($values);
    //c) wypisz wszystkie klucze tablicy $a1 (array_keys)
    $keys = array_keys($a1);
    print_r($keys);
    //c) wyszukaj czy w tablicy $a3 występuje wartość "red"
    if (in_array("red", $a3)) {
        echo "Wartość 'red' występuje w tablicy <br> ";
    } else {
        echo "Wartość 'red' nie występuje w tablicy <br> ";
    }
    //d) wyszukaj czy w tablicy $a3 występuje kluc "d"
    if (array_key_exists("d", $a3)) {
        echo "Klucz 'd' występuje w tablicy <br> ";
    } else {
        echo "Klucz 'd' nie występuje w tablicy <br> ";
    }
    //g) wypisz tablicę od 3 elementu do końca (array_slice)
    $slice = array_slice($a1, 2);
    print_r($slice);









      


