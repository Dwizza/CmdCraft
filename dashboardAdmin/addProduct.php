<?php 
include_once "header.php";
include_once "../classes/ProductManager.php";
include_once "../classes/Product.php";

$setProduct = new ProductManager();
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $photo = $_POST['photo'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    if(empty($name)||empty($desc)||empty($price)||empty($quantity)){
        echo "<div class='bg-red-500 rounded-md text-center w-full mb-4'><p class='text-white'>Fill all field</p></div>";
    }else{
        $addproduct = new product($name,$desc,$price,$quantity,$photo);
        $setProduct->addProduct($addproduct);
    echo "<div class='bg-green-500 rounded-md text-center w-full '><p class='text-black'>your product has been create</p></div>";
    }
}
?>

<div class='bg-red-200 w-[500px] rounded-md p-10 mt-10 m-auto'>
    <form class="flex flex-col items-center gap-5 mt-5" action="" method="POST">
        <label for="name">Name<br>
        <input class="w-[400px] px-2 h-8 bg-gray-100 rounded-md border-b-2 outline-none focus:border-pink-500" type="text" name="name" id="name">
        </label>
        <label for="photo">photo<br>
        <input class="w-[400px] px-2 h-8 bg-gray-100 rounded-md border-b-2 outline-none focus:border-pink-500" type="url" name="photo" id="photo">
        </label>
        <label for="desc">Description<br>
        <textarea class="w-[400px] px-2 bg-gray-100 rounded-md border-b-2 outline-none focus:border-pink-500" name="desc" id="desc"></textarea>
        </label>
        <label for="price">Price<br>
            <input class="w-[400px] px-2 h-8 bg-gray-100 rounded-md border-b-2 outline-none focus:border-pink-500" min="0" type="number" name="price" id="price">
        </label>
        <label for="quantity">Quantity<br>
            <input class="w-[400px] px-2 h-8 bg-gray-100 rounded-md border-b-2 outline-none focus:border-pink-500" min="0" type="number" name="quantity" id="quantity">
        </label>
        <button class="px-4 py-2 w-20 text-white rounded-lg bg-pink-700 hover:bg-pink-900" name="save">Save</button>
    </form>
</div>
<?php include_once "footer.php";?>