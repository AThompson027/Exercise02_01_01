<!doctype html>


<html>

<head>
    <!--
 Exercise 02_01_01
 Author: Annie Thompson
 Date: 9.10.18
 
 PHPCodeBlocks.php
 -->
    <title> Page Title</title>
    <meta charset="UFT-8">
    <title>PHP Code Blocks</title>
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h1>Hello, World!</h1>
    <p>
        <?php
         echo "This text is displayed using standard PHP script delimiters. <br>";
        print "Second string";
        print ("<br> Third string");
         echo "<h1>This is a" , " multiple argument string.</h1>";
         echo ("<h1>This is a" . " multiple argument string.</h1>");
        print("<h2>This is some math: ". (2 + 3) . "</h2>");
         ?>
    </p>
</body>

</html>
