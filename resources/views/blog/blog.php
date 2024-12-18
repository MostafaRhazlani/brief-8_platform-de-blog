<?php 
    require_once('../../../isLogged/isLogged.php');
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
        <div class="w-full mb-5">
            <div class="flex justify-between items-center p-3">
                <div class="flex">
                    <img class="mr-3 object-cover w-12 h-12 rounded-full" src="../../img/istockphoto-1392528328-612x612.jpg" alt="">
                    
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
    </div>
</div>

<!-- form create article -->
<div class="formArticle w-full h-full absolute top-0 z-30 bg-slate-200 bg-opacity-75 flex justify-center items-center hidden">
    <div class="bg-white p-4 rounded-lg w-5/6 md:w-3/5 lg:w-2/6 relative">
        
        <span id="close" class="absolute right-4 top-3 text-3xl text-gray-500 cursor-pointer hover:text-red-600">
            <i class="fa-regular fa-circle-xmark"></i>
        </span>
        <h1 class="text-center font-semibold text-xl mb-3">Create article</h1>

        <div class="flex mb-6 border-t-2 py-3">
            <img class="mr-3 object-cover w-12 h-12 rounded-full" src="../../img/istockphoto-1392528328-612x612.jpg" alt="">
            
            <div>
                <p class="">@ramos_rodigier</p>
                <p class="text-gray-500 text-[13px]">ramos@gmail.com</p>
            </div>
        </div>

        <form action="">
            <div class="w-full">
                <div class="flex flex-col mb-4">
                    <label for="title">Title</label>
                    <input type="text" id="title" placeholder="Enter title here" class="w-full p-2 mt-1 rounded-md border-2 border-red-600">
                </div>
                <div class="flex flex-col mb-4">
                    <label for="content">Content</label>
                    <textarea class="w-full min-h-32 p-2 mt-1 rounded-md border-2 border-red-600" name="" id="content" placeholder="add content here"></textarea>
                </div>

                <div class="inputTags hidden flex flex-col mb-4">
                    <label for="">Choose Tag</label>
                    <select class="w-full p-2 mt-1 rounded-md border-2 border-red-600" name="" id="">
                        <option value="">front-end</option>
                        <option value="">desgin</option>
                        <option value="">back-end</option>
                    </select>
                </div>

                <div class="inputImage hidden">
                    <label for="">Upload image</label>
                    <input type="file" class="w-full p-2 mt-1 rounded-md border-2 border-red-600">
                </div>
    
                <div class="flex justify-between items-center border-2 rounded-md mt-4 py-2 px-4">
                    <h2>add to user article</h2>
                    <div>
                        <span class="showInputTags text-3xl text-gray-400 hover:text-[#200E32] cursor-pointer">
                            <i class="fa-solid fa-layer-group"></i>
                        </span>&nbsp;
                        <span class="showInputImage text-3xl text-gray-400 hover:text-[#200E32] cursor-pointer"><i class="fa-solid fa-file-image"></i></span>
                    </div>
                </div>
            </div>

            <div class="w-full">
                <button class="p-2 w-full bg-red-600 rounded-md text-white mt-6 hover:bg-red-500" type="submit">add article</button>
            </div>
        </form>
    </div>
</div>

<?php include('../layout/_FOOTER.php') ?>