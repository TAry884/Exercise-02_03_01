<!doctype html>
<!-- 
    Author: Ty Ary
    Date: 9.24.18
 
    Filename: ValidateCerditCard.php
-->

<html>
    
    <head>
        <title>Validate Credit Card</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    
    <body>
        <h2>Validate Credit Card</h2>
        <?php
        //Credit card array
        $creditCard = array("8910-1234-5678-6543", "0000-9123-4567-0123");
        /* For each index of the array get the index number and the value of the indexed array, if empty tell them they need to put something in the field, 
        If full remove the dashes and spaces in the number */
        foreach($creditCard as $indexNumber => $cardNumber) {
            if (empty($cardNumber)) {
                echo "<p>Credit Card number $indexNumber is invalid because it contains an empty string.</p>";
            } else {
                $creditCardNumber = $cardNumber;
                $creditCardNumber = str_replace("-", "", $creditCardNumber);
                $creditCardNumber = str_replace(" ", "", $creditCardNumber);
                echo "<p>Credit Card Number $indexNumber $creditCardNumber removed dashes and spaces.</p>";
                //If the card number contains a letter inside the number tell them it wont work, if there isnt a letter then tell them it works
                if (!is_numeric($creditCardNumber)) {
                    echo "<p>Credit Card Number $indexNumber $creditCardNumber is invalid because it contains a non-numeric character.</p>";
                } else {
                    echo "<p>Credit Card Number $indexNumber $creditCardNumber is a valid Credit Card Number.</p>";
                }
            }
        }
        ?>
    </body>
    
</html>