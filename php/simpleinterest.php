<?php
class Simple{


function simpleInterest($x){
$p=$x;
$t=1;
$r=5;

$si=($p*$t*$r)/100;
echo $si;

}
}


$obj = new Simple();
$obj->simpleInterest(555);

?>