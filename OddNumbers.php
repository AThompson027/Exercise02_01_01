<!doctype html>


<html>

<head>
    <!--
 Exercise 02_01_01
 Author: Annie Thompson
 Date: 9.18.18
 
 OddNumbers.php
 -->
    <title>Odd Numbers</title>
    <meta charset="UFT-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Odd Numbers</h2>
    <?php
    echo "<br>This is the odd numbers<br>";
    $num = 1;
    while ( $num <= 100 ) {
        print "$num<br/>";
        $num += 2;
    }
    echo "<br>This is the even numbers<br>";
    $num = 2;
    while ($num <= 100) {
        print "$num<br/>";
        $num += 2;
    }
    ?>
</body>

</html>
