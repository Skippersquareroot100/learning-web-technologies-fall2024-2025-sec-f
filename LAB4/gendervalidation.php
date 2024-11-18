<?php
session_start();
if(isset($_POST['submit']))
{
    if(isset($_POST['Gender']))
    {
        $gender = $_POST['Gender']; 
        echo "Welcome"; 
    }
    else
    {
        header('location:gender.html');
    }
}

?>