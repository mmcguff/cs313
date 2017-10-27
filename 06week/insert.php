<?php

// foreach( $_POST as $stuff ) {
//     if( is_array( $stuff ) ) {
//         foreach( $stuff as $thing ) {
//             echo $thing . "</br>";
//         }
//     } else {
//         echo $stuff . "</br>";
//     }
// }
          
require 'herokuDBConnect.php';
if(!empty($_POST['submitted'])) 
{
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];

    //Checkbox state recorded using Ternary if operator.  
    $isSubscriber = (isset($_POST['subscriber']) ? 1 : 0);
    $isCustomer = (isset($_POST['customer']) ? 1 : 0);
    $isHost = (isset($_POST['host']) ? 1 : 0);
    $isConsultant = (isset($_POST['consultant']) ? 1 : 0);

    echo "<p>" . $firstName . "</p>";
    echo "<p>" . $lastName . "</p>";
    echo "<p>" . $email . "</p>"; 
    echo "<p>" . $isSubscriber . "</p>"; 
    echo "<p>" .  $isCustomer . "</p>"; 
    echo "<p>" . $isHost . "</p>"; 
    echo "<p>" . $isConsultant . "</p>"; 

} else
{

    echo "I am empty.";
}



        
?>  
