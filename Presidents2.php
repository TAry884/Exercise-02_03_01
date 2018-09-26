<!doctype html>
<!-- 
    Author: Ty Ary
    Date: 9.20.18
 
    Filename: Presidents2.php
-->

<html>
    
    <head>
        <title>Presidents 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    
    <body>
        <h2>Presidents 2</h2>
        <?php
        //array for the first five of the presidents and their terms
        $presidents = "George Washington; John Adams; Thomas Jefferson; James Madison; James Monroe";
        //Filters through the strings of the presidents and removed the ; in them
        $thisPresident = strtok($presidents, ";");
        //While loop to loop through the president
        while ($thisPresident != NULL) {
            echo "$thisPresident<br>";
            $thisPresident = strtok(";");
        }
        ?>
    </body>
    
</html>