<?php
session_start();
if (isset($_POST['submit'])) 
{
    $name = $_POST['username']; 
    $flag =true;
     for($i=0;$i<strlen($name);$i++)
     {
        if((!($name[$i]>='a' && $name[$i]<='z') && !($name[$i]>='A' && $name[$i]<='Z')) || $name[$i]==' ' || $name[$i]=='.' || $name[$i]=='-')
        {
            $flag =false;
            break;
        }
     }

    if ($name==null || strlen($name)<2 || (!($name[0]>='a' && $name[0]<='z') && !($name[0]>='A' && $name[0]<='Z')) || $flag==false)
    {
       header('location:name.html');
    }
    else
    {
        echo "Hello, " .$name. "!";
    }
}
?>
