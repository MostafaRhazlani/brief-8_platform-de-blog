<?php
    require_once('../../../connectdb/connectiondb.php');

        //  check if the id exist in url and get it
        if(isset($_GET['idDeleteArticle'])) {
            $getIdArticle = $_GET['idDeleteArticle'];
            echo "<script>
                document.addEventListener('DOMContentLoaded', () => {
                    const formDelete = document.querySelector('.formDelete');
                    formDelete.classList.remove('hidden');
                });
            </script>";
    
            $getArticle = mysqli_query($conn, "SELECT id FROM articles WHERE id = $getIdArticle");
            $resultArticle = mysqli_fetch_assoc($getArticle);
            
        }
    
        if(isset($_POST['idArticle'])) {
            $idArticle = $_POST['idArticle'];
    
            $deleteFromTags = mysqli_prepare($conn, "DELETE FROM tags WHERE idArticle = ?");
            
            mysqli_stmt_bind_param($deleteFromTags, 'i', $idArticle);
            if(mysqli_stmt_execute($deleteFromTags)) {
                
                $deleteArticle = mysqli_prepare($conn, "DELETE FROM articles WHERE id = ?");
                mysqli_stmt_bind_param($deleteArticle, 'i', $idArticle);
                if(mysqli_stmt_execute($deleteArticle)) {
                    header('location: blog.php');
                }
            }
        }

?>

<div class="formDelete hidden w-full h-screen fixed top-0 z-30 bg-gray-500 bg-opacity-75 flex justify-center items-center">
    <div class="w-4/5 md:1/5 lg:w-1/4 bg-white p-5 top-20 rounded-md text-center">
        <div class="w-full flex justify-center mb-10 mt-5">
            <div class="w-28 h-28 rounded-full border-[4px] border-yellow-500 flex justify-center items-center">
                <span class="text-6xl text-yellow-500">!</span>
            </div>
        </div>
    
        <h1 class="text-2xl font-semibold text-center mb-4">Are You Sure You Want Delete This Article</h1>
        
        <form action="./deleteArticle.php" method="post">
            
            <input type="hidden" name="idArticle" value="<?php echo $resultArticle['id'] ?>">
           
            <div class="mt-10 flex justify-evenly">
                <button id="closeDelete" type="button" class="px-3 py-2 w-2/6 bg-red-600 text-white rounded-md hover:bg-red-400">No</button>
                <button class="px-3 py-2 w-2/6 bg-blue-600 text-white rounded-md hover:bg-blue-400" type="submit">Yes</button>
            </div>
        </form>
    </div>
</div>


<script>
    const closeDelete = document.querySelector('#closeDelete');
    
    closeDelete.addEventListener('click', () => {
        window.location.href = 'blog.php';
    });

</script>