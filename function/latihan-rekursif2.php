<?php
$list =[90,80,60,100,127,81,51,99];

echo "nilai terkecil dari array diatas :". min($list)."<br>";
echo "nilai terbesar dari array diatas :". max($list).

function nilaiMax($array)
{
    $i = count($array);
    $max = $array[0];
    for ($s = 1; $s < $i; $s++)
    if ($max < $array [$s])
        $max = $array [$s];
        return $max;
}

function nilaiMin($array)
{
    $i = count($array);
    $min =$array [0];
    for ($s =1; $s < $i; $s++)
    if ($min > $array [$s])
    $min = $array [$s];
    return $min;
}
   $array = array( 90,80,60,100,127,81,51,99);
   echo"Nilai Maksimum
   : ".nilaiMax($array);
   echo "<br>";
   echo "Nilai Minimum :" .nilaiMin($array);

?>