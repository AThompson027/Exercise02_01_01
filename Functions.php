<!doctype html>


<html>

<head>
    <!--
 Exercise 02_01_01
 Author: Annie Thompson
 Date: 9.11.18
 
Functions.php
 -->
    <title>functions</title>
    <meta charset="UFT-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Passing Parameters</h2>
    <?php
        function incrementByValue($countByValue) {
            ++$countByValue;
            echo "<P>incrementByValue() value is $countByValue</p>";
        }
        function incrementByReference(&$countByReference) {
            ++$countByReference;
            echo "<P>incrementByReference() value is $countByReference</p>";
        }
    
    //main program
    $count = 1;
    echo "<p>Main program starting value is $count.</p>";
    incrementByValue($count);
    echo "<p>Main program after increment by value is $count.</p>";
    
    $count = 1;
    echo "<p>Main program starting value is $count.</p>";
    incrementByReference($count);
    echo "<p>Main program after incrementByReference() is $count.</p>";
    ?>
    
    <h2>Default Arguments</h2>
    <?php 
        function paint($room="office", $color="red") {
            return "<p>The color of the {$room} is {$color}</p>";
        }
    
//    echo paint("blue");
    echo paint();
    echo paint("bedroom", "blue");
    echo paint("bedroom", null);
    echo paint("bedroom");
    echo paint("blue");
    ?>
</body>

</html>
