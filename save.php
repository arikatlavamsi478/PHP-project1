<?php

$response = array();
if(isset($_POST["submit"]))
{
    $product = $_POST["product"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];

    $total = $qty * $price;

$response['product'] = $product;
$response['qty'] = $qty;
$response['price'] = $price;
$response['total'] = $total;
$response['datetim'] = date("Y-m-d h:i:sa");

$inp = file_get_contents('results.json');
$tempArray = json_decode($inp);
array_push($tempArray, $data);
$jsonData = json_encode($response);
file_put_contents('results.json', $jsonData);

echo '<script language="javascript">alert("Data Saved!")</script>';
echo("<script>window.location = 'view.php';</script>");
}
?>