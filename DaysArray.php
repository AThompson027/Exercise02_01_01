<!doctype html>


<html>

<head>
    <!--
 Exercise 02_01_01
 Author: Annie Thompson
 Date: 9.11.18
 
 DaysArray.php
 -->
    <title>Days Array</title>
    <meta charset="UFT-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>Days Array</h2>
    <?php
    // made an array with data to plug into an echo statement to display them onto the HTML
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    echo "<p>The days of the week in English are: <br>", 
    $days[0], "<br>", 
    $days[1], "<br>", 
    $days[2], "<br>", 
    $days[3], "<br>", 
    $days[4], "<br>", 
    $days[5], "<br>", 
    $days[6], "<br></p>";
    
    // made an array with data to plug into an echo statement to display them onto the HTML
    $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    echo "<p>The days of the week in French are: <br>", 
    $days[0], "<br>", 
    $days[1], "<br>", 
    $days[2], "<br>", 
    $days[3], "<br>", 
    $days[4], "<br>", 
    $days[5], "<br>", 
    $days[6], "<br></p>";
    ?>
</body>

</html>
