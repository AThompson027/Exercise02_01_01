<!doctype html>


<html>

<head>
    <!--
 Exercise 02_01_01
 Author: Annie Thompson
 Date: 9.11.18
 
 InterestArray.php
 -->
    <title>Interest Array</title>
    <meta charset="UFT-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>Interest Array</h2>
    <?php
    // Inserted variables in an array to display the data onto to HTML. Also made the data in the variables have 
    // four decimal places.
    $interestRate1 = .0725;
    $interestRate2 = .0750;
    $interestRate3 = .0775;
    $interestRate4 = .0800;
    $interestRate5 = .0825;
    $interestRate6 = .0850;
    $interestRate7 = .0875;
    
    $ratesArray = array($interestRate1, $interestRate2, $interestRate3, $interestRate4, $interestRate5, $interestRate6, $interestRate7);
    
    echo number_format($ratesArray[0], 4), "<br>";
    echo number_format($ratesArray[1], 4), "<br>";
    echo number_format($ratesArray[2], 4), "<br>";
    echo number_format($ratesArray[3], 4), "<br>";
    echo number_format($ratesArray[4], 4), "<br>";
    echo number_format($ratesArray[5], 4), "<br>";
    echo number_format($ratesArray[6], 4), "<br>";
    ?>
</body>

</html>
