<?php
    include("db.php");


    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "SELECT * FROM task WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $roww = mysqli_fetch_array($result);
        }

        if (isset($_POST['update'])) {
            $id = $_GET['id'];
            $title = $_POST['title'];
            $category = $_POST['category'];
            $article = $_POST['article']; 
            
            $imagen = $_FILES['imagen']['name'];
            $ruta = $_FILES['imagen']['tmp_name'];
            $destino = "../includes/img/".$imagen;
            copy($ruta,$destino);
            $query = "UPDATE task SET title = '$title', category = '$category', article = '$article', imagen = '$imagen' WHERE id = $id";
            mysqli_query($conn, $query);
            header("Location: index.php");
        }
    }

?>

<?php include("includes/header.php") ?>

<main>
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <img src="./includes/img/perfil.jpg" alt="">
        </div>
        <div class="dash-content">
            <form action="edit_task.php?id=<?php echo $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
                <div class="max-w-4xl mx-auto">
                    <div class="overview">
                        <div class="title">
                            <i class="uil uil-file-plus-alt"></i>
                            <span class="text">Edit Post <?php echo $_GET['id'] ?></span>
                        </div>
                    </div>
                    <p class="text-black">Post Title</p>
                    <div class="relative mb-6">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                data-name="Layer 1" viewBox="0 0 24 24">
                                <path xmlns="http://www.w3.org/2000/svg" fill="#0092E4"
                                    d="M16,6a1,1,0,0,0-1-1H3A1,1,0,0,0,3,7H8V18a1,1,0,0,0,2,0V7h5A1,1,0,0,0,16,6Zm5,5H15a1,1,0,0,0,0,2h2v5a1,1,0,0,0,2,0V13h2a1,1,0,0,0,0-2Z" />
                            </svg>
                        </div>
                        <input type="text" name="title" value="<?php echo $roww['title'] ?>"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <p class="text-black">Post Category</p>
                    <div class="relative mb-6">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                data-name="Layer 1" viewBox="0 0 24 24">
                                <path xmlns="http://www.w3.org/2000/svg" fill="#0092E4"
                                    d="M16,6a1,1,0,0,0-1-1H3A1,1,0,0,0,3,7H8V18a1,1,0,0,0,2,0V7h5A1,1,0,0,0,16,6Zm5,5H15a1,1,0,0,0,0,2h2v5a1,1,0,0,0,2,0V13h2a1,1,0,0,0,0-2Z" />
                            </svg>
                        </div>
                        <input type="text" name="category" value="<?php echo $roww['category'] ?>"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <p class="text-black">Post Imagen</p>
                    <div class="relative mb-6">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                data-name="Layer 1" viewBox="0 0 24 24">
                                <path xmlns="http://www.w3.org/2000/svg" fill="#0092E4"
                                    d="M19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a2.81,2.81,0,0,0,.49-.05l.3-.07.07,0h0l.05,0,.37-.14.13-.07c.1-.06.21-.11.31-.18a3.79,3.79,0,0,0,.38-.32l.07-.09a2.69,2.69,0,0,0,.27-.32l.09-.13a2.31,2.31,0,0,0,.18-.35,1,1,0,0,0,.07-.15c.05-.12.08-.25.12-.38l0-.15A2.6,2.6,0,0,0,22,19V5A3,3,0,0,0,19,2ZM5,20a1,1,0,0,1-1-1V14.69l3.29-3.3h0a1,1,0,0,1,1.42,0L17.31,20Zm15-1a1,1,0,0,1-.07.36,1,1,0,0,1-.08.14.94.94,0,0,1-.09.12l-5.35-5.35.88-.88a1,1,0,0,1,1.42,0h0L20,16.69Zm0-5.14L18.12,12a3.08,3.08,0,0,0-4.24,0l-.88.88L10.12,10a3.08,3.08,0,0,0-4.24,0L4,11.86V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z" />
                            </svg>
                        </div>
                        <input type="file" name="imagen"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <p class="text-black">Post Article</p>
                    <div class="relative mb-6">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                data-name="Layer 1" viewBox="0 0 24 24">
                                <path xmlns="http://www.w3.org/2000/svg" fill="#0092E4"
                                    d="M16,6a1,1,0,0,0-1-1H3A1,1,0,0,0,3,7H8V18a1,1,0,0,0,2,0V7h5A1,1,0,0,0,16,6Zm5,5H15a1,1,0,0,0,0,2h2v5a1,1,0,0,0,2,0V13h2a1,1,0,0,0,0-2Z" />
                            </svg>
                        </div>
                        <textarea name="article" id="article"><?php echo $roww['article'] ?></textarea>

                    </div>
                    <button type="submit" name="update" value="Save News"
                        class="text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Editar
                        Post</button>
                </div>
            </form>
        </div>
    </section>

</main>

<?php include("includes/footer.php") ?>