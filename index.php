<?php
$a=array(5,4,1,-1,3,4,6);

function findMinArray($arr){
    $min = $arr[0];
for ($i=0;$i<count($arr);$i++){
    if ($arr[$i]<$min){
        $min=$arr[$i];

    }
}
echo "gia tri nho nhat: ".$min."<br>"."vi tri phan tu: ".$i;
}
findMinArray($a);
