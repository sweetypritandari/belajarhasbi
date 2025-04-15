<?php

$name = isset($_POST['name']) ? $_POST['name']:'';
$price = isset($_POST['price']) ? $_POST['price']:'';
$storesql="INSERT INTO products (name, price) VALUES ('$name', $price)";
include_once('conn.php');
if ($conn->query($storesql)) {
    echo "Products created!";
} else {
    echo"ERROR!";
}
