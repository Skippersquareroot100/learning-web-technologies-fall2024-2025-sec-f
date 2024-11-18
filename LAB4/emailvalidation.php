<?php
session_start();
if (isset($_POST['submit'])) {
    $email = $_REQUEST['emailname'];
    if (empty($email) || strpos($email, "@") == false || strpos($email, ".") == false) 
    {
        header('location: email.html');
    } else {
     
        echo "Welcome Home";
    }
}
?>
