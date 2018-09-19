<!doctype html>


<html>

<head>
    <!--
 Exercise 02_01_01
 Author: Annie Thompson
 Date: 9.18.18
 
TempConversion.php
 -->
    <title>Temp Conversion</title>
    <meta charset="UFT-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Temp Conversion</h2>
    <?php
    
//    $counter = 0;
//    $temps = array();
//    echo "<h2>Celcius</h2>";
//    while($counter < 101) {
//        $temps[] = $counter;
//        ++$counter;
//    }
//    foreach($temps as $currentNum) {
//        echo "$currentNum<br>";
//    }
    ?>

    <?php
//    $counter = 32;
//    $temps = array();
//    echo "<h2>Fahrenheit</h2>";
//    while($counter < 213) {
//        $temps[] = $counter;
//        ++$counter;
//    }
//    foreach($temps as $currentNum) {
//        echo "$currentNum<br>";
//    }
    ?>
    <!--
</body>

</html>
-->

    <table>

        <thead>
            <td><strong>Fahrenheit</strong></td>
            <td><strong>Celsius</strong></td>
        </thead>

        <?php
        // Made a while loop to increment 1-100 and also convert those numbers into
        // the Celcius form on the side of the Fahrenheit numbers by using the calculations ($fahrenheit - 32 * 3/9)
        $fahrenheit = 0;
        while ($fahrenheit < 101) {
            $celsius = ($fahrenheit - 32) * 5 / 9;
            echo "<tr><td>$fahrenheit</td><td>$celsius</td></tr>";
            ++$fahrenheit;
        } ?>

    </table>

     </body> 
     </html>
