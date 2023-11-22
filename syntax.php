<?php 
    //https://www.w3schools.com/php/php_syntax.asp
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <?php 
            //każda instrukcja "wstrzykiwana" w kod html wymaga otwarcia i zamknięcia znacznikami php
            echo "<p>Przykładowy tekst na stonie</p>"; 
        
        ?>
    </main>
    <footer></footer>
</body>
</html>

<?php 
    /* 
        jeżeli za towim znacznikiem php nie występuje już żaden <?php ?> 
        nie musisz go dodawać, w ten sposób unikniesz niepotrzebnych białych znaków na końcu pliku
    */