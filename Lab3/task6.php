<?php
$array=[1,12,8,7,6,5,4,87,14,9,78];
$elemn=9;
$found=false;

for($i=0; $i< count($array) ; $i++)
{
    if($array[$i]==$elemn)
    {
      $found=true;
      break;  
    }
      
    
}
if($found==true)
{
 echo"Found <br>";
}else
{
    echo"Not Found <br>";
}

?>