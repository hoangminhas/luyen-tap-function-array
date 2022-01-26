<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu function</title>
</head>
<body>
<h1>Menu</h1>
<form id="form" action="#" method="post">
    <input type="text" name="input" size="60" placeholder="nhap mang theo dang: x y z..."><br>
    <select name="select" id="select">
        <option value="max">Tim so lon nhat</option>
        <option value="min">Tim so nho nhat</option>
        <option value="max-positive-even">Tim so duong chan lon nhat</option>
        <option value="min-negative-odd">Tim so am le nho nhat</option>
        <option value="square-num">Tim cac so chinh phuong</option>
        <option value="sum">Tinh tong mang</option>
        <option value="sum-average">Tinh trung binh cong</option>
        <option value="above-average">Tim cac phan tu lon hon TBC</option>
        <option value="sort-asc">Sap xep tang dan</option>
        <option value="sort-des">Sap xep giam dan</option>
    </select>
    <button>Let's go</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_REQUEST['input'];
    $arr = explode(' ', $str);
    $select = $_REQUEST['select'];

    //find max
    if ($select == "max") {
        echo findMaxInArr($arr);
    }

    //find min
    if ($select == "min") {
        echo findMinInArr($arr);
    }

    //find max positive even

}

function findMaxInArr($arr)
{
    $max = $arr[0];
    foreach ($arr as $value) {
        if ($max < $value) {
            $max = $value;
        }
    }
    return $max;
}
function findMinInArr($arr)
{
    $min = $arr[0];
    foreach ($arr as $value) {
        if ($min > $value) {
            $min = $value;
        }
    }
    return $min;
}
function findMaxPositiveEven($arr)
{

}
?>
