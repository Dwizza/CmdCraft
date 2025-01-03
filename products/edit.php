<?php
require_once '../classes/ProductManager.php';
require_once '../classes/Product.php';
include_once '../dashboardAdmin/header.php';
$productManager = new ProductManager();
$product = $productManager->getProduct($_GET['id']);

if(isset($_POST['btnSubmit']))
{
    $product->setName($_POST['name']);
    $product->setPhoto($_POST['photo']);
    $product->setDescription($_POST['desc']);
    $product->setPrice($_POST['price']);
    $product->setQuantity($_POST['quantity']);
    $productManager->update($product);
    header('Location: ../dashboardAdmin/productData.php');
}    

?>

    <div class='bg-red-200 w-[500px] rounded-md p-10 mt-10 m-auto'>
    <form class="flex flex-col items-center gap-5 mt-5" action="" method="POST">
        <label for="name">Name<br>
        <input class="w-[400px] px-2 h-8 bg-gray-100 rounded-md border-b-2 outline-none focus:border-pink-500" type="text" name="name" value="<?= $product->getName(); ?>" id="name">
        </label>
        <label for="photo">photo<br>
        <input class="w-[400px] px-2 h-8 bg-gray-100 rounded-md border-b-2 outline-none focus:border-pink-500" type="url" name="photo" value="<?= $product->getPhoto(); ?>" id="photo">
        </label>
        <label for="desc">Description<br>
        <textarea class="w-[400px] px-2 bg-gray-100 rounded-md border-b-2 outline-none focus:border-pink-500" name="desc" value="" id="desc"><?= $product->getDescription(); ?></textarea>
        </label>
        <label for="price">Price<br>
            <input class="w-[400px] px-2 h-8 bg-gray-100 rounded-md border-b-2 outline-none focus:border-pink-500" min="0" type="number" name="price" value="<?= $product->getPrice(); ?>" id="price">
        </label>
        <label for="quantity">Quantity<br>
            <input class="w-[400px] px-2 h-8 bg-gray-100 rounded-md border-b-2 outline-none focus:border-pink-500" min="0" type="number" name="quantity" value="<?= $product->getQuantity(); ?>" id="quantity">
        </label>
        <button class="px-4 py-2 w-20 text-white rounded-lg bg-pink-700 hover:bg-pink-900" type="submit" name="btnSubmit">Edit</button>
    </form>
</div>

    <?php include_once '../dashboardAdmin/footer.php';?>