<?php
session_start();
if (isset($_POST['submit'])) {
    $dd = $_REQUEST['d'];
    $mm = $_REQUEST['m'];
    $yyyy=$_REQUEST['y'];
     

    if (empty($dd) || empty($mm) || empty($yyyy)) 
    {
        header('location: dob.html');
    } 
    else if (strlen($dd)>2 || strlen($mm)>2 || strlen($yyyy)>4) 
    {
     
        echo "Welcome Home";
    }
}
?>