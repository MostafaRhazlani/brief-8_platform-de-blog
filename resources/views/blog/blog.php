<?php 
    require_once('../../../isLogged/isLogged.php');
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
                    <div class="flex justify-between items-center p-3">
                        <div class="flex">
                            <img class="mr-3 object-cover w-12 h-12 rounded-full" src="../../img/149071.png" alt="">
                            
                            <div>
                                <p class="font-semibold"><?php echo $article['username'] ?></p>
                                <p class="text-gray-500 text-sm"><?php echo $article['email'] ?></p>
                            </div>
                        </div>
                        <span class="text-2xl">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </span>
                    </div>
                    <div class="h-80 flex items-center justify-center bg-[#200E32]">
                        <img class="h-full object-contain" src="../../img/istockphoto-1392528328-612x612.jpg" alt="">
                    </div>
                    <div class="flex p-4 justify-between border-b-2">
                        <div class="flex gap-3">
                            <a href="#" class="hover:scale-110 transition duration-300 ease-in-out text-3xl cursor-pointer">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                            
                            <a href="#" class="hover:scale-110 transition duration-300 ease-in-out text-3xl cursor-pointer">
                                <i class="fa-regular fa-comment"></i>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="hover:scale-110 transition duration-300 ease-in-out text-3xl cursor-pointer">
                                <i class="fa-regular fa-bookmark"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-4">
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
                        <h1 class="font-semibold text-lg mb-2"><?php echo $article['title'] ?></h1>
                        <p class="break-words">
                            <?php echo $article['content'] ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>

<?php include('./addArticle.php') ?>

<?php include('../layout/_FOOTER.php') ?>