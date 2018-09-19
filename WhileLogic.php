<!doctype html>


<html>

<head>
    <!--
 Exercise 02_01_01
 Author: Annie Thompson
 Date: 9.18.18
 
 WhileLogic.php
 -->
    <title>While Logic</title>
    <meta charset="UFT-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>While Logic</h2>
    <?php
    $counter = 1;
    $numbers = array();
    while($counter < 101) {
        $numbers[] = $counter;
        ++$counter;
    }
    foreach($numbers as $currentNum) {
        echo "$currentNum<br>";
    }
    ?>
</body>

</html>
