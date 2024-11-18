<?php
session_start();
if (isset($_POST['submit'])) {
    $dd = $_REQUEST['d'];
    $mm = $_REQUEST['m'];
    $yyyy=$_REQUEST['y'];
     

   
    if(($dd>=1 && $dd<=31) && ($mm>=1 && $mm<=12) && ($yyyy>=1953 && $yyyy<=1998) )
    {
        echo"HELLO SIR! Your Date of Birth is, ".$dd."/".$mm."/".$yyyy;

    }
    else
    {
        header('location: dob.html');
    }
}
?>