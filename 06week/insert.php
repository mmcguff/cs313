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
    $isDelivery = (isset($_POST['delivery']) ? 1 : 0);
    $isCustomer = (isset($_POST['customer']) ? 1 : 0);
    $isHost = (isset($_POST['host']) ? 1 : 0);
    $isConsultant = (isset($_POST['consultant']) ? 1 : 0);

    echo "<p>First Name: " . $firstName . "</p>";
    echo "<p>Last Name: " . $lastName . "</p>";
    echo "<p>Email: " . $email . "</p>"; 
    echo "<p>Is Subscriber: " . $isSubscriber . "</p>"; 
    echo "<p>Is on Home Delivery: " . $isDelivery . "</p>"; 
    echo "<p>Is Customer: " . $isCustomer . "</p>"; 
    echo "<p>Is a Host: " . $isHost . "</p>"; 
    echo "<p>Is a Consultant: " . $isConsultant . "</p>"; 

} else
{

    echo "I am empty.";
}



        
?>  
