  <!DOCTYPE html>
<html lang="en">
<head>
    <title>Variabel Static</title>
</head>
<body>
    <?php
        function test(){
            static $a = 0;
            echo "Nilai a :";
            echo $a;
            echo "<br>";
            $a++;
        }
        test();
        test();
        test();
        test();
        test();
    ?>
</body>
</html>