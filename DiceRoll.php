<!doctype html>


<html>

<head>
    <!--
 Exercise 02_01_01
 Author: Annie Thompson
 Date: 9.11.18
 
 DiceRoll.php
 -->
    <title>Dice Roll</title>
    <meta charset="UFT-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Dice Roll</h2>
    <?php
    $faceNamesSingular = array("one", "two", "three", "four", "five", "six");
    $faceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");
    
    // This function checks for doubles and singles in the dice roll and also displays
    //numbers into the HTML
    function checkForDoubles($die1, $die2) {
        global $faceNamesSingular;
        global $faceNamesPlural;
        $returnValue = false;
        echo "Die 1: $die1<br>Die 2: $die2<br>";
        
        if($die1 === $die2) {
            echo "The roll was double ", $faceNamesPlural[$die1 - 1], ".<br>";
            $returnValue = true;
        }
        else {
            echo "The roll was a ", $faceNamesSingular[$die1 - 1], " and a ", $faceNamesSingular[$die2 - 1], ".<br>";
            $returnValue = false;
        }
        return $returnValue;
    }
    // This function will display the score of the game into the HTML
    function displayScoreText($score, $doubles) {
        if($doubles) {
            if($score === 2) {
                echo "You rolled snake eyes!<br>";
        }
        else if($score === 12) {
            echo "You rolled boxcars!<br>";
        }
        } 
        else {
            if($score === 3) {
             echo "You rolled loose deuce!<br>";
        }
            else if($score === 5) {
                echo "You rolled fever five!<br>";
            }
            else if($score === 7) {
                echo "You rolled natural!<br>";
            }
            else if($score === 9) {
                echo "You rolled nina!<br>";
            }
            else if($score === 11) {
                echo "You rolled yo!<br>";
            }
            else {
                echo "Your roll has no nickname!<br>";
            }
            }
        }
    // The dice variables rolls random numbers for the dice and displays the numbers and adds the two dice
    // values
    $dice = array();
    $dice[0] = rand(1,6);
    $dice[1] = rand(1,6);
    echo "<p>";
    $score = $dice[0] + $dice[1];
    echo "The total score for the roll was $score.<br>";
    $doubles = checkForDoubles($dice[0], $dice[1]);
    displayScoreText($score, $doubles);
    echo "</p>";
    ?>
</body>

</html>
