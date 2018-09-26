<!doctype html>
<!-- 
    Author: Ty Ary
    Date: 9.20.18
 
    Filename: BooksAndAuthors.php
-->

<html>
    
    <head>
        <title>Books and authors</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    
    <body>
        <h2>Books and Authors</h2>
        <?php
        //Arrays of authors, their names, and their real names
        $books = array("The Adventures of Huckleberry Finn", "Nineteen Eighty-Four", "Alice's Adventures in Wonderland", "The Cat in the Hat");
        $authors = array("Mark Twain", "George Orwell", "Lewis Carroll", "Dr. Seuss");
        $realNames = array("Samuel Clemens", "Eric Blair", "Charles Dodson", "Theodore Geisel");
        //for loop to print the authors, their books, and their real names
        for($i = 0; $i < count($books); $i++) {
            echo "<p>The real name of {$authors[$i]}, " . "the author of \"{$books[$i]}\", " . "is {$realNames[$i]}.</p>";
        }
        //for loop to print the amount of characters in the printed text and the amount of words in the printed text
        for($i = 0; $i < count($books); $i++) {
            echo "<p>The title \"{$books[$i]}\" contains " . strlen($books[$i]) . " characters and " . str_word_count($books[$i]) . " words.</p>";
        }
        //manipulates the strings to do strict upper or lowercase strings or fix them in certain ways
        echo "<h2>Manipulating Strings</h2>";
        $startingText = "mAdAm, i'M aDaM";
        $uppercaseText = strtoupper($startingText);
        $lowercaseText = strtolower($startingText);
        echo "<p>$uppercaseText</p>";
        echo "<p>$lowercaseText</p>";
        echo "<p>" . ucfirst($lowercaseText) . "</p>\n";
        echo "<p>" . lcfirst($uppercaseText) . "</p>\n";
        $workingText = ucwords($lowercaseText);
        echo "<p>$workingText<p/>\n";
        //Manipulates strings to encrypt, print a certain amount, print backwards, or shuffle the words for the string
        echo "<h2>Other Manipulations</h2>";
        echo "<p>" . md5($workingText) . "</p>\n";
        echo "<p>" . substr($workingText, 0, 6) . "</p>\n";
        echo "<p>" . strrev($workingText) . "</p>\n";
        echo "<p>" . str_shuffle($workingText) . "</p>\n";
        ?>
    </body>
    
</html>