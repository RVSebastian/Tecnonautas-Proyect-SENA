<?php include("db.php")?>
<?php

    if (isset($_POST['save_task'])){
        $title = $_POST['title'];
        $article = $_POST['article'];  
        $category = $_POST['category'];

        $imagen = $_FILES['imagen']['name'];
        $ruta = $_FILES['imagen']['tmp_name'];
        $destino = "../includes/img/".$imagen;
        copy($ruta,$destino);
        $query = "INSERT INTO task(title, article, imagen, category, created_at) VALUES ('$title', '$article','$imagen', '$category', NOW() )";
        $result = mysqli_query($conn, $query);
        header("Location: index.php");
    }
?>