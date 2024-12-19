<?php 
    require_once('../../../../isLogged/isOwner.php');
    require_once('../../../../connectdb/connectiondb.php');

    $getCategories = mysqli_query($conn, "SELECT * FROM categories");
?>

<?php include('../../layout/_HEAD.php') ?>
<?php include('../../layout/_SIDEBAR.php') ?>

<div class="md:pl-20 w-full h-screen pt-28 p-3">
    <div class="mb-3 flex flex-col md:flex-row justify-between">
        <form action="./insertCategory.php" method="post">
            <div class="flex flex-col md:flex-row-reverse mb-5 md:mb-0">
                <input class="border-2 border-red-600 rounded-md py-2 px-4" type="text" placeholder="Enter category" name="category">
                <button class="py-2 px-4 bg-red-600 rounded-md hover:bg-red-500 text-white md:mr-3 mt-2 md:mt-0"><i class="fa-solid fa-circle-plus"></i> Add Category</button>
            </div>
        </form>
        <button class="py-2 px-4 bg-red-600 rounded-md hover:bg-red-500 text-white"><i class="fa-solid fa-arrow-down-a-z"></i> Sort Categories</button>
    </div>
    <div class="w-full h-5/6 shadow-[0px_0px_4px_#c9c9c9] rounded-md">
        <div class="p-4">
            <div class="w-full overflow-scroll" style="scrollbar-width: none">
                <div class="rounded-md ">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="p-4 text-start">ID</th>
                                <th class="p-4 text-start">Name Category</th>
                                <th class="p-4 text-start">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- display all articles -->
                             <?php if($getCategories) { ?>
                                <?php $index = 0; 
                                    while($category = mysqli_fetch_assoc($getCategories)) { ?>
                                    <tr class="border-b-[0.2px] text-start hover:bg-gray-100">
                                        <td class="px-4 py-4"><?php echo $index +=1 ?></td>
                                        <td class="px-4 py-4"><?php echo $category['nameCategory'] ?></td>
                                        <td class="px-4 py-4 min-w-52">
                                            <a href="#" class="showFormDelete bg-red-700 rounded-full px-2 py-1 text-white text-[13px] mr-2 hover:bg-red-500 cursor-pointer">
                                                <i class="fa-regular fa-trash-can"></i>&nbsp;Delete
                                            </a>
                                            <a href="#" class="showFormDelete bg-[#301f41] rounded-full px-3 py-1 text-white text-[13px] hover:bg-[#462468] cursor-pointer">
                                                <i class="fa-solid fa-pen-to-square"></i>&nbsp;Edit
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