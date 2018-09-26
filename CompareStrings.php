<!doctype html>
<!-- 
    Author: Ty Ary
    Date: 9.24.18
 
    Filename: CompareStrings.php
-->

<html>

<head>
    <title>Compare Strings</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Compare Strings</h2>
    <?php
    //Variables containing strings  
    $firstString = "Geek2Geek";
    $secondString = "Geezer2Geek";
    //if the first and second string are not empty and if the strings are the same tell the user they are the same else, tell them that one of the variables are empty, also if they are the same tell them the amount of characters in common and how many it would take to make them the same
    if (!empty($firstString) && !empty($secondString)) {
        if ($firstString == $secondString) {
            echo "<p>Both strings are the same.</p>";
        } else {
            echo "<p>Both strings have " . similar_text($firstString, $secondString) . " character(s) in common.</p>";
            echo "<p>You must change " . levenshtein($firstString, $secondString) . " character(s) to make the strings the same.</p>";
        }   
    } else {
        echo "<p>Either the \$firstString variable or the \$secondString variable does not contain a value so the two strings cannot be compared.</p>";
    }
        ?>
</body>

</html>
