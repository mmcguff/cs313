<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thrive| Email</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body>
           <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Thrive Well for Life</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Contact</a></li>
                <li><a href="customer.php">Customer</a></li>
                <li class="active"><a href="email.php">Email</a></li>
            </ul>
        </div>
    </nav>
        
        <div class="container" style="margin-top:50px">
        <h1>Email</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Email ID</th>
                    <th>Email Address</th>
                    <th>Is Subscriber</th>
                    <th>Is Customer</th>
                    <th>Is Consultant</th>
                </tr>
            </thead>
            <tbody>
 <?php 
require 'herokuDBConnect.php';


if(isset($_POST["submitted"]))
{
   $firstName = $_POST["firstName"];
   $lastName  = $_POST["lastName"];
   $email     = $_POST["email"];
   $isSubscriber = isset($_POST['subscriber']) && $_POST['subscriber']  ? "1" : "0";
   $isCustomer = isset($_POST['customer']) && $_POST['customer']  ? "1" : "0";
   $isHost = isset($_POST['host']) && $_POST['host']  ? "1" : "0";
   $isConsultant = isset($_POST['consultant']) && $_POST['consultant']  ? "1" : "0";
}

echo $firstName . "\n" .$lastName . "\n" . $email;
echo "\n" . $isSubscriber;
echo "\n" . $isCustomer;
echo "\n" . $isHost;
echo "\n" . $isConsultant;

$db->exec('insert into email(email_address, is_subscriber, is_customer, is_consultant) values("$email", "$isSubscriber", "$isCustomer", "$isConsultant"');

$emailquery = 'select EMAIL_ID, EMAIL_ADDRESS, IS_SUBSCRIBER, IS_CUSTOMER, IS_CONSULTANT from EMAIL;';

$emailresultObj = $db->query($emailquery);

if($emailresultObj -> rowCount() > 0)
{
    foreach ($emailresultObj as $singleRowFromQuery)
    {
        echo '<tr>';
        echo '<th scope="row"> '. $singleRowFromQuery['email_id'] . '</th>';
        echo "<td>". $singleRowFromQuery['email_address']. '</td>';
        echo "<td>". $singleRowFromQuery['is_subscriber']. '</td>';
        echo "<td>". $singleRowFromQuery['is_customer'].'</td>';
        echo "<td>". $singleRowFromQuery['is_consultant'].'</td>';
        echo "</tr>";
    }
}
?>  
            </tbody>
        </table>
    </div>
    </body>
</html>
