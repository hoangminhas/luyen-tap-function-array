<?php

//Tao mang ngau nhien
function randArr($size): array
{
    $arr = [];
    for ($i = 0; $i<$size; $i++) {
        $randomNum = rand(0, 10);
        $arr[] = $randomNum;
    }
    return $arr;
}
$arr = randArr(10);

//Sap xep mang tang dan
sort($arr);

//Loai bo cac phan tu giong nhau
function checkValidOnce($arr){
    $validOnceArr = [];
    $throwableArr = [];
    foreach ($arr as $value) {
        if (!in_array($value, $validOnceArr)) {
            $validOnceArr[] = $value;
        } else {
            $throwableArr[] = $value;
        }
    }
    return $validOnceArr;
}

//Chay chuong trinh
echo "<pre>";
print_r($arr);
$newArr = checkValidOnce($arr);
print_r($newArr);


