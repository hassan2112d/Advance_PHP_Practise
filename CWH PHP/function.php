<?php

function sum($hlo)
{
    $sum = 0;

  foreach ($hlo as  $value) {
    
    $sum+=$value;
  }

  return $sum;
}

function avg($hlo)
{
    $sum = 0;
    $i = 1;
  foreach ($hlo as  $value) {
    
    $sum+=$value;
    $i ++;
  }

  return $sum/$i;
}

$hassan = [25,34,87,76,56];

$summarks = sum($hassan);
$avgmarks = avg($hassan);

echo "Total marks of hasssan in te subject is $summarks".'<br>';
echo "Avg marks of hasssan in te subject is $avgmarks";



?>