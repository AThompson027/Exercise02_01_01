<!doctype html>


<html>

<head>
    <!--
 Exercise 02_01_01
 Author: Annie Thompson
 Date: 9.18.18
 
GasPrices.php
 -->
    <title>Gas Prices</title>
    <meta charset="UFT-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Gas Prices</h2>
    <?php
    // Made an if statement to say that if the gas price is less or equal to 3 dollars and if the price is less or equal to
    // 2 dollars that it will echo a message in the HTML
    $gasPrice = 2.57;
    if ($gasPrice <= 3 && $gasPrice <= 2){
            echo "<p>Gas prices are between $2.00 and $3.00.</p>";
        } else {
            echo "<p>Gas prices are not between $2.00 and $3.00.";
        }
    ?>
</body>

</html>
