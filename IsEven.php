<!doctype html>


<html>

<head>
    <!--
 Exercise 02_01_01
 Author: Annie Thompson
 Date: 9.11.18
 
 IsEven.php
 -->
    <title>Is Even</title>
    <meta charset="UFT-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>Is Even</h2>
    <?php
    // Made a an array with random numbers plug into a for loop to randomly generate numbers in the HTML 
    // and then distinguish is the number is odd or even.
    $numbersArray = array("22", "23", "24", "25", "26", "27", "28");
    for($i = 0; $i < count($numbersArray); $i++){
       if ($numbersArray[$i] % 2 === 0) {
        echo "$numbersArray[$i] is an even number <br>";
    } else {
           echo "$numbersArray[$i] is an odd number <br>";
       }
    }
    
    ?>
</body>

</html>
