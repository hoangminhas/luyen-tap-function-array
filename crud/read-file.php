<?php
session_start();
$_SESSION['user'] = array(
    ["name" => "John", "age" => 26, "address" => "England"],
    ["name" => "Paul", "age" => 24, "address" => "England"],
    ["name" => "Ringo", "age" => 26, "address" => "England"]
);

function loadData($key) {
    return $_SESSION[$key]??[];
}

loadData('user');