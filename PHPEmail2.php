<!doctype html>
<!-- 
    Author: Ty Ary
    Date: 9.20.18
 
    Filename: PHPEmail2.php
-->

<html>
    
    <head>
        <title>PHP Email2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    
    <body>
        <h2>PHP Email2</h2>
        <?php
        //array of email addresses
        $emailAddresses = array("john.smith@php.test", "mary.smith.mail@php.example", "john.jones@php.invalid", "alan.smithee@test", "jsmith456@example.com", "jsmith456@test", "mjones@example", "mjones@example.net", "jane.a.doe@example.org");
        //function to check if the email address has a @ and a .
        function validateAddress($address) {
            if (strpos($address, '@') !== false && strpos($address, '.') !== false) {
                return true;
            } else {
                return false;
            }
        }
        //function that sorts the email addresses
        function sortAddresses($addresses) {
            $sortedAddresses = array();
            $iLimit = count($addresses) - 1;
            $jLimit = count($addresses);
            for ($i = 0; $i < $iLimit; $i++) {
                $currentAddress = $addresses[$i];
                for ($j = $i + 1;$j < $jLimit; $j++) {
                    if (strcasecmp($currentAddress, $addresses[$j]) > 0) {
                        $tempVal = $addresses[$j];
                        $addresses[$j] = $currentAddress;
                        $currentAddress = $tempVal;
                    }
                }
                $sortedAddresses[] = $currentAddress;
            }
            return($sortedAddresses);
        }
        
        $sortedAddresses = sortAddresses($emailAddresses);
        $sortedAddressList = implode(", ", $sortedAddresses);
        echo "<p>Sorted addresses: $sortedAddressList<p>\n";
            
        //for each email address print which ones do not have a .
        foreach ($sortedAddresses as $thisAddress) {
            if (validateAddress($thisAddress) === false) {
                echo "<p>The e-mail address <em>$thisAddress</em> does not appear to be valid.</p>";
            }
        }
        ?>
    </body>
    
</html>