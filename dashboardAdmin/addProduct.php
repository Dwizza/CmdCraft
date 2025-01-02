<?php include_once "header.php";?>

<div class='bg-red-200 w-[500px] rounded-md p-10 mt-10 m-auto'>
    <form class="flex flex-col items-center gap-5 mt-5" action="" method="POST">
        <label for="name">Name<br>
        <input class="w-[400px] px-2 h-8 bg-gray-100 rounded-md border-b-2 outline-none focus:border-pink-500" type="text" name="name" id="name">
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
        <button class="px-4 py-2 w-20 text-white rounded-lg bg-pink-700 hover:bg-pink-900">Save</button>
    </form>
</div>
<?php include_once "footer.php";?>