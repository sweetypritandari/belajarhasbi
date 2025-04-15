<?php
//echo $_GET['test'];
header('Content-Type:application/json');
include_once('conn.php');

if (isset($_GET['product'])) {
    
    $product = $_GET['product'];
    $productsql = "SELECT * FROM products WHERE id=$product";
}else {
    $productsql = "SELECT * FROM products";
}

$result = $conn->query($productsql);
$products = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_array()) {
    $products[]  = [
        "id" =>$row["id"],
        "name" =>$row["name"],
        "price" =>$row ["price"],
    ];
}
}

echo json_encode($products);

?>
