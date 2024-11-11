<?php
$f=10;
$s=50;
$t=12;

if($f>$s && $f> $t)
{
 echo"The biggest number is ".$f."<br>";
}
elseif ($s>$f && $s> $t)
{
    echo"The biggest number is ".$s."<br>";
}
elseif ($t>$f && $t> $s)
{
    echo"The biggest number is ".$t."<br>";
}

?>
