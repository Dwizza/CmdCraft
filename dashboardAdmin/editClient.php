<?php include_once 'header.php'; ?>

<div class='bg-red-200 w-[500px] rounded-md p-10 mt-10 m-auto'>
    <p class="text-center text-lg">edit client</p>
    <form class="flex flex-col items-center gap-5 mt-5" action="" method="POST">
        <label for="name">Name<br>
        <input readonly class="w-[400px] px-2 h-8 bg-gray-100 rounded-md border-b-2 outline-none focus:border-pink-500" value="" type="text" name="name" id="name">
        </label>
        <label for="photo">email<br>
        <input readonly class="w-[400px] px-2 h-8 bg-gray-100 rounded-md border-b-2 outline-none focus:border-pink-500" type="url" name="photo" id="photo">
        </label>
        <label for="desc">is_active<br>
        <select name="is_active" id="">
            <option value="active">Active</option>
            <option value="desactive">Desactive</option>
        </select>
        </label>
        <button class="px-4 py-2 w-20 text-white rounded-lg bg-pink-700 hover:bg-pink-900" name="save">Save</button>
    </form>
</div>

<?php include_once 'footer.php'; ?>