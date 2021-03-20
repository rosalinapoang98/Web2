<html> 
    <head> 
        <title>Looping</title> 
    </head> 
    <body> <h2>TABEL PERKALIAN </h2> 
    <?php
    for ($a = 1; $a <= 10; $a++)
    {
        for ($b = 1; $b <= 10; $b++)
         {
            $angka = $a * $b;
            echo $a. "x".$b."=".$angka."</br>";
         }
        echo "</br>";
    }
?>
</body> 
</html> 