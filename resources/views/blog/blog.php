<?php 
session_start();
// session_destroy();
if(!isset($_SESSION['token'])) {
    header('location:/resources/views/auth/login.php');
}

?>

<?php include('../layout/_HEAD.php') ?>
<?php include('../layout/_SIDEBAR.php') ?>

<div class="w-full md:w-4/6 lg:w-[40%] md:mx-auto">
    <div class="w-full bg-white shadow-[0px_0px_2px_#9b9b9b] mt-24 rounded-lg">
        <div class="w-full p-4">
            <div class="py-3 px-5 rounded-full bg-gray-200 text-gray-500 font-medium cursor-pointer hover:bg-gray-300 flex items-center gap-2">
                <i class="fa-solid fa-newspaper"></i>
                <h1>create article</h1>
            </div>
        </div>
        <div class="w-full mb-5">
            <div class="flex justify-between items-center p-3">
                <div class="flex">
                    <img width="" class="mr-3 object-cover w-12 h-12 rounded-full" src="../../img/istockphoto-1392528328-612x612.jpg" alt="">
                    
                    <div>
                        <p class="font-semibold">@ramos_rodigier</p>
                        <p class="text-gray-500 text-sm">ramos@gmail.com</p>
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
                <h1 class="font-semibold text-lg mb-2">My first picture in this app</h1>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Debitis doloremque deserunt, saepe ratione sit aut! Dolor
                    excepturi ullam odit sed.
                </p>
            </div>
        </div>
        <div class="w-full">
            <div class="flex justify-between items-center p-3">
                <div class="flex">
                    <img width="" class="mr-3 object-cover w-12 h-12 rounded-full" src="../../img/smiley-man-relaxing-outdoors_23-2148739334.avif" alt="">
                    
                    <div>
                        <p class="font-semibold">@ramos_rodigier</p>
                        <p class="text-gray-500 text-sm">ramos@gmail.com</p>
                    </div>
                </div>
                <span class="text-2xl">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </span>
            </div>
            <div class="h-80 flex items-center justify-center bg-[#200E32]">
                <img class="h-full object-contain" src="../../img/smiley-man-relaxing-outdoors_23-2148739334.avif" alt="">
            </div>
            <div class="flex p-4 justify-between items-center border-b-2">
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
                <h1 class="font-semibold text-lg mb-2">My first picture in this app</h1>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Debitis doloremque deserunt, saepe ratione sit aut! Dolor
                    excepturi ullam odit sed.
                </p>
            </div>
        </div>
    </div>
</div>

<?php include('../layout/_FOOTER.php') ?>