<?php
require_once '../classes/ProductManager.php';
include_once '../dashboardAdmin/header.php';
$productManager = new ProductManager();
$product = $productManager->getProduct($_GET['id']);

if(isset($_POST['btnSubmit']))
{
    $product->setName($_POST['name']);
    $product->setDescription($_POST['description']);
    $product->setPrice($_POST['price']);
    $product->setQuantity($_POST['quantity']);
    $productManager->update($product);
    header('Location: /dashboardAdmin/index.php');
}    

?>

    <form action="">
        <input type="text" name="name" value="<?= $product->getName(); ?>">
        <input type="text" name="description" value="<?= $product->getDescription(); ?>">
        <input type="text" name="price" value="<?= $product->getPrice(); ?>">
        <input type="text" name="quantity" value="<?= $product->getQuantity(); ?>">
        <button type="submit" name="btnSubmit">Modifier</button>
    </form>

    <?php include_once '../dashboardAdmin/footer.php';?>