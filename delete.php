<?php
// Delete a product by ID
include 'db.php';
/* @var $pdo PDO */

//TODO: Complete the code to handle product deletion request and delete the product from the database
$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
$stmt->execute([$id]);


header("Location: index.php");
exit();