<!doctype html>


<html>

<head>
    <!--
 Exercise 02_01_01
 Author: Annie Thompson
 Date: 9.11.18
 
 ConditionalScript.php
 -->
    <title>Conditional Script</title>
    <meta charset="UFT-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>Conditional Script</h2>
    <?php
    $intVariable = 75;
     $result = "";
    if ($intVariable > 100) {
        $result = '$intVariable is greater than 100';
    }
    else {
        $result = '$intVariable is less than or equal to 100';
    }
    echo '<h3>$result: ' . "$result</h3>";
    ?>
</body>

</html>
