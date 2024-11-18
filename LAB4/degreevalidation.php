<?php
session_start();
if(isset($_POST['submit']))
{
    if((isset($_POST['ssc']) && isset($_POST['hsc'])) ||
    (isset($_POST['ssc']) && isset($_POST['bsc']))    ||
    (isset($_POST['ssc']) && isset($_POST['msc']))    ||
    (isset($_POST['hsc']) && isset($_POST['bsc']))    ||
    (isset($_POST['hsc']) && isset($_POST['msc']))    ||
    (isset($_POST['bsc']) && isset($_POST['msc'])))
    {
      echo"Welcome";
    }
    else
    {
        header('location:degree.html');
    }
}
?>