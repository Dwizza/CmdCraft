<?php 
include_once "header.php";
include_once "../classes/userManager.php";
require_once "../database.php";
// ob_start();

?>

<table class="mt-10 min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
    <thead class="bg-gray-200">
        <tr>
        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Name</th>
        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Email</th>
        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Role</th>
        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Is Active</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $showrow = new userManager();
        $rows=$showrow->affichage();
        foreach ($rows as $row) {
        ?>
        <tr class="hover:bg-gray-100">
        <td class="px-4 py-2 border-b"><?= $row['name']?></td>
        <td class="px-4 py-2 border-b"><?= $row['email']?></td>
        <td class="px-4 py-2 border-b"><?= $row['role']?></td>
            <?php if($row['is_active'] == 'active'){?>
            <td class="px-4 py-2 border-b">
            <a class="px-4 py-2 rounded-lg bg-green-400" href="../classes/userManager.php?id=<?= $row['id']?>&is_active=active" >Active</a>
            </td>
            <?php }else{?>
            <td class="px-4 py-2 border-b">
                <a class="px-4 py-2 rounded-lg bg-red-400" href="../classes/userManager.php?id=<?= $row['id']?>&is_active=desactive">Désactive</a>
            </td>
            <?php }?>
        </tr>
        <?php
        }
        
        ?>
    </tbody>
</table>

<?php include_once "footer.php";?>
