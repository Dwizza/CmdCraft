<?php include_once "header.php";?>

<table class="mt-10 mx-2 min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
    <thead class="bg-gray-200">
        <tr>
        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Name</th>
        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Email</th>
        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Password</th>
        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Is Active</th>
        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b"></th>
        </tr>
    </thead>
    <tbody>
        
        <tr class="hover:bg-gray-100">
        <td class="px-4 py-2 border-b">John Doe</td>
        <td class="px-4 py-2 border-b">john@example.com</td>
        <td class="px-4 py-2 border-b">********</td>
        <td class="px-4 py-2 border-b">
            <span class="text-green-600 font-semibold">Active</span>
        </td>
        <td class="px-4 py-2 border-b">
            <button class="text-lime-700">Edit</button>
        </td>
        </tr>
        
    </tbody>
</table>

<?php include_once "footer.php";?>