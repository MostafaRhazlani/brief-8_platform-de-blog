<?php 
    session_start();
    require_once('../../../connectdb/connectiondb.php'); 

    $getCategories = mysqli_query($conn, "SELECT * FROM categories");

    $getArticles = mysqli_query($conn,"SELECT articles.*, users.username, users.email FROM articles inner join users on users.id = articles.idUser ORDER BY id DESC");
    
?>

<?php include('../layout/_HEAD.php') ?>
<?php include('../layout/_SIDEBAR.php') ?>

<div class="w-full md:w-4/6 lg:w-[40%] md:mx-auto pt-24">
    <div class="w-full bg-white shadow-[0px_0px_2px_#9b9b9b] rounded-lg">
        <div class="w-full p-4">
            <div class="showFormArticle py-3 px-5 rounded-md bg-gray-200 text-gray-500 font-medium cursor-pointer hover:bg-gray-300 flex items-center gap-2">
                <i class="fa-solid fa-newspaper"></i>
                <h1>create article</h1>
            </div>
        </div>
        <?php if($getArticles) { ?>
            <?php while($article = mysqli_fetch_assoc($getArticles)) { ?>
                <div class="w-full mb-3">
                    <div class="h-80 flex items-center justify-center bg-[#200E32]">
                        <img class="h-full object-contain" src="../../img/istockphoto-1392528328-612x612.jpg" alt="">
                    </div>
                    <div class="flex justify-between items-center px-6 py-4">
                        <div class="flex">
                            <img class="mr-3 object-cover w-12 h-12 rounded-full" src="../../img/149071.png" alt="">
                            
                            <div>
                                <p class="font-semibold"><?php echo $article['username'] ?></p>
                                <p class="text-gray-500 text-sm"><?php echo $article['email'] ?></p>
                            </div>
                        </div>
                        <div class="relative">
                            <span class="showActions text-2xl cursor-pointer hover:text-red-600" data-id="<?php echo $article['id'] ?>">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </span>

                            <div class="popupActions absolute hidden -right-2 mt-2 w-32 bg-white shadow-[0px_0px_5px_1px_#c2c2c2] p-1 rounded-md" data-id="<?php echo $article['id'] ?>">
                                <?php if($_SESSION['user']['id'] == $article['idUser']) { ?>
                                    <a href="./blog.php?idArticle=<?php echo $article['id'] ?>" class="showFormEditArticle flex items-center text-sm p-1 hover:bg-gray-200 cursor-pointer rounded-sm">
                                        <i class="fa-solid fa-pen-to-square"></i>&nbsp;Edit article
                                    </a>
                                <?php } ?>
                                <a href="./blog.php?idArticle=<?php echo $article['id'] ?>" class="showFormEditArticle flex items-center text-sm p-1 hover:bg-gray-200 cursor-pointer rounded-sm">
                                    <i class="fa-solid fa-bug"></i>&nbsp;Report
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 py-3">
                        <div class="flex gap-1 mb-2 flex-wrap">
                            <?php
                                $idArticle = $article['id'];
                                $getTags = mysqli_query($conn, "SELECT tags.*, categories.nameCategory FROM tags 
                                    INNER JOIN categories ON categories.id = tags.idCategory WHERE tags.idArticle = $idArticle");
                            ?>
                            <?php if($getTags) {?>
                                <?php while($tag = mysqli_fetch_assoc($getTags)) {?>
                                        <span class="bg-blue-400 rounded-sm py-1 px-2 text-[12px] text-white"><?php echo $tag['nameCategory'] ?></span>
                                <?php } ?>
                            <?php } ?>
                        </div>
                        <h1 class="font-semibold text-3xl mb-2"><?php echo $article['title'] ?></h1>
                        <p class="break-words">
                            <?php echo $article['content'] ?>
                        </p>
                    </div>
                    <div class="px-6">
                        <div class="flex border-b-2 justify-between py-2 mb-8">
                            <div class="flex gap-3">
                                <a href="#" class="hover:scale-110 transition duration-300 ease-in-out cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 -960 960 960" fill="#cf4c4c"><path d="M440-501Zm0 381L313-234q-72-65-123.5-116t-85-96q-33.5-45-49-87T40-621q0-94 63-156.5T260-840q52 0 99 22t81 62q34-40 81-62t99-22q81 0 136 45.5T831-680h-85q-18-40-53-60t-73-20q-51 0-88 27.5T463-660h-46q-31-45-70.5-72.5T260-760q-57 0-98.5 39.5T120-621q0 33 14 67t50 78.5q36 44.5 98 104T440-228q26-23 61-53t56-50l9 9 19.5 19.5L605-283l9 9q-22 20-56 49.5T498-172l-58 52Zm280-160v-120H600v-80h120v-120h80v120h120v80H800v120h-80Z"/></svg>
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#cf4c4c"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z"/></svg> -->
                                </a>
                                
                                <a href="#" class="hover:scale-110 transition duration-300 ease-in-out cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 -960 960 960" fill="#6d6972"><path d="M880-80 720-240H320q-33 0-56.5-23.5T240-320v-40h440q33 0 56.5-23.5T760-440v-280h40q33 0 56.5 23.5T880-640v560ZM160-473l47-47h393v-280H160v327ZM80-280v-520q0-33 23.5-56.5T160-880h440q33 0 56.5 23.5T680-800v280q0 33-23.5 56.5T600-440H240L80-280Zm80-240v-280 280Z"/></svg>
                                </a>
                            </div>
                            <div class="flex">
                                <div class="flex items-center mr-5">
                                    <a href="#" class="transition duration-300 ease-in-out mr-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#6d6972"><path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/></svg>
                                    </a>
                                    <p>0 views</p>
                                </div>
                                <a href="#" class="hover:scale-110 transition duration-300 ease-in-out cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#6d6972"><path d="M200-120v-640q0-33 23.5-56.5T280-840h400q33 0 56.5 23.5T760-760v640L480-240 200-120Zm80-122 200-86 200 86v-518H280v518Zm0-518h400-400Z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>

<?php include('./addArticle.php') ?>
<?php include('./editArticle.php') ?>

<?php include('../layout/_FOOTER.php') ?>