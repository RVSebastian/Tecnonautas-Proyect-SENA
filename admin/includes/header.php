<?php 
    session_start();
    if (!isset($_SESSION['correo'])) {
        header("Location: login.php"); 
    }
    $correo = $_SESSION['correo'];
    $contra = $_SESSION['contra'];

    $petic = "SELECT * FROM admins WHERE correo = '$correo' and contra = '$contra'";
    
    if($resultd= $conn->query($petic)){
        $row=$resultd->fetch_array(); 
        $nr =$resultd->num_rows; 
        //Si existe el usuario lo va a redireccionar a la pagina de Bienvenida.
        if($nr >= 1){ 
        }
        //Si no existe lo va a enviar al login otra vez.
        else if($nr <= 0) { 
            header("Location: login.php"); 
        }  
    }

    if (isset($_POST['logout'])) {
        session_destroy();
        header("Location: login.php");
        die();
    }

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo.png">
    <title>Admin</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="./logo.png">
            </div>
            <span class="logo_name">Techno<span style="color: #E74C3C">nautas</span></span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li>
                    <a href="../admin/index.php">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dahsboard</span>
                    </a>
                </li>
                <li>
                    <a href="../admin/create_task.php">
                        <i class="uil uil-file-plus-alt"></i>
                        <span class="link-name">New Post</span>
                    </a>
                </li>
                <li>
                    <a href="../admin/index.php">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Analytics</span>
                    </a>
                </li>
                <li>
                    <a href="../admin/index.php">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="link-name">Like</span>
                    </a>
                </li>
                <li>
                    <a href="../admin/index.php">
                        <i class="uil uil-comments"></i>
                        <span class="link-name">Comment</span>
                    </a>
                </li>
                <li>
                    <a href="../admin/index.php">
                        <i class="uil uil-share"></i>
                        <span class="link-name">Share</span>
                    </a>
                </li>
            </ul>

            <ul class="logout-mode">
                <li>
                    <form method="POST">
                        <button type="submit" name="logout">
                            <a>
                                <i class="uil uil-signout"></i>
                                <span class="link-name">Logout</span>
                            </a>
                        </button>

                    </form>
                </li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="loader">
        <img src="loader.gif" alt="">
    </div>