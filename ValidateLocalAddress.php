<!doctype html>
<!-- 
    Author: Ty Ary
    Date: 9.24.18
 
    Filename: ValidateLocalAddress.php
-->

<html>

<head>
    <title>Validate Local Address</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Validate Local Address</h2>
    <?php
    //email array
    $email = array("jsmith123@example.org", "john.smith.mail@example.org", "john.smith@example.org", "john.smith@example", "jsmith123@mail.example.org");
    //For each loop to loop through the email addresses and filter out if they fit the regex, if they do then print that the email address is valid, if not tell the user it is invalid
    foreach($email as $emailAddress) {
        echo "The email address &ldquo;" . $emailAddress . "&rdquo; ";
        if (preg_match("/^(([A-Za-z]+\d+)|" . "([A-Za-z]+\.[A-Za-z]+))" . "@((mail\.)?)example\.org$/i", $emailAddress) == 1) {
            echo " is a valid e-mail address.<br>";
        } else {
            echo " is not a valid e-mail address.<br>";
        }
    }
    ?>
</body>

</html>
