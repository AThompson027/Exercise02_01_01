<!doctype html>


<html>

<head>
    <!--
 Exercise 02_01_01
 Author: Annie Thompson
 Date: 9.10.18
 
 MultipleScripts.php
 -->
    <title> Page Title</title>
    <meta charset="UFT-8">
    <title>Multiple Scripts</title>
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h1>PHP Environment Info</h1>
<!--    The following code is examples of how to display text into the HTML with PHP. It also shows different php functions-->
<!--    that will display varieties of information.-->
    <p>
        The PHP code was rendered with PHP version
        <?php
        echo phpversion();
        ?>
        <p>
            The PHP code was rendered with Zend Engine version
        </p>
        <?php 
        echo zend_version();
        ?>
        <p>
            PHP's default MIME type is
        </p>
        <?php 
        echo ini_get("default_mimetype")
        ?>
        <p>
            The maximum allowable execution time of a PHP script is
        </p>
        <?php 
        echo ini_get("max_execution_time")
        ?>
    </p>
</body>

</html>
