<?php 
include_once "header.php";
include_once "../classes/ProductManager.php";
include_once "../classes/Product.php";
?>

<table class="mt-10 w-full bg-white border border-gray-200 rounded-lg shadow-md">
    <thead class="bg-gray-200">
        <tr>
        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Name</th>
        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Photo</th>
        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Description</th>
        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Price</th>
        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Quantity</th>
        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b"></th>
        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $affiche = new productManager();
        $affiche->displayAll();
        ?>

        
    </tbody>
</table>

<?php include_once "footer.php";?>