<?php 
    require_once('../../../../isLogged/isOwner.php');
    require_once('../../../../connectdb/connectiondb.php');

    $getUsers = mysqli_query($conn, "SELECT *, roles.nameRole FROM users INNER JOIN roles ON roles.id = users.idRole");
?>

<?php include('../../layout/_HEAD.php') ?>
<?php include('../../layout/_SIDEBAR.php') ?>

<div class="md:pl-20 w-full h-screen pt-28 p-3">
    <div class="mb-3 flex flex-col md:flex-row justify-between">
        <button class="py-2 px-4 bg-red-600 rounded-md hover:bg-red-500 text-white"><i class="fa-solid fa-arrow-down-a-z"></i> Sort Users</button>
    </div>
    <div class="w-full h-5/6 shadow-[0px_0px_4px_#c9c9c9] rounded-md">
        <div class="p-4">
            <div class="w-full overflow-scroll" style="scrollbar-width: none">
                <div class="rounded-md ">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="p-4 text-start">ID</th>
                                <th class="p-4 text-start">Username</th>
                                <th class="p-4 text-start">Email</th>
                                <th class="p-4 text-center">Role</th>
                                <th class="p-4 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- display all articles -->
                             <?php if($getUsers) { ?>
                                <?php $index = 0; 
                                    while($user = mysqli_fetch_assoc($getUsers)) { ?>
                                    <tr class="border-b-[0.2px] text-start hover:bg-gray-100">
                                        <td class="px-4 py-4"><?php echo $index +=1 ?></td>
                                        <td class="px-4 py-4"><?php echo $user['username'] ?></td>
                                        <td class="px-4 py-4"><?php echo $user['email'] ?></td>
                                        <td class="px-4 py-4 text-center">
                                            <span class="<?php echo ($user['nameRole'] == 'Admin') ? 'bg-green-600' : 'bg-blue-600' ?> px-2 py-[2px] rounded-full text-white">
                                                <?php echo $user['nameRole'] ?></td>
                                            </span>
                                        <td class="px-4 py-4 min-w-32 text-center">
                                            <a href="#" class="showFormDelete bg-red-700 rounded-full px-2 py-1 text-white text-[13px] mr-2 hover:bg-red-500 cursor-pointer">
                                                <i class="fa-regular fa-trash-can"></i>&nbsp;Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    
    </div>
</div>

<?php include('../../layout/_FOOTER.php') ?>