<?php
$n = "не определен";
$x = "не определен";
if(isset($_POST["n"])){
  
    $n = $_POST["n"];
}
if(isset($_POST["x"])){
  
    $x = $_POST["x"];
}
$sum = 0;
$y=2*$n+1;
    for($i=0;$i<$n;$i++){
        $p=(pow(($x-1),$y))/($y*pow(($x-1),$y));
        $sum+=$p;
    }
    $sum = 2*$sum;
echo ("Сумма ровна = $sum");
?>