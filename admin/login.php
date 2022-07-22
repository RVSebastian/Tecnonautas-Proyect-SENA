<?php 
    session_start();
    include("db.php");
    
    if (isset($_POST['submit'])) {
       $_SESSION['correo'] = $_POST['gmail'];
       $_SESSION['contra'] = $_POST['contra'];

        $correo = $_SESSION['correo'];
        $contra = $_SESSION['contra'];
        $petic = "SELECT * FROM admins WHERE correo = '$correo' and contra = '$contra'";
    
        if($resultd= $conn->query($petic)){
            $row=$resultd->fetch_array(); 
            $nr =$resultd->num_rows; 
            //Si existe el usuario lo va a redireccionar a la pagina de Bienvenida.
            if($nr >= 1){ 
              header ("Location: index.php"); 
            }
            //Si no existe lo va a enviar al login otra vez.
            else if($nr <= 0) { 
                header("Location: login.php"); 
            }  
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo.png">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="wrapper">
        <h2>Login Admin</h2>
        <form method="POST">
            <div class="input-box">
                <input type="text" name="gmail" placeholder="Enter your email" required>
            </div>
            <div class="input-box">
                <input type="password" name="contra" placeholder="Enter your password" required>
            </div>
            <div class="input-box button">
                <input type="submit" name="submit" value="Login">
            </div>

        </form>
    </div>

</body>

</html>

<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #E74C3C;
}

.wrapper {
    position: relative;
    max-width: 430px;
    width: 100%;
    background: #fff;
    padding: 34px;
    border-radius: 6px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.wrapper h2 {
    position: relative;
    font-size: 22px;
    font-weight: 600;
    color: #333;
}

.wrapper h2::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 28px;
    border-radius: 12px;
    background: #E74C3C;
}

.wrapper form {
    margin-top: 30px;
}

.wrapper form .input-box {
    height: 52px;
    margin: 18px 0;
}

form .input-box input {
    height: 100%;
    width: 100%;
    outline: none;
    padding: 0 15px;
    font-size: 17px;
    font-weight: 400;
    color: #333;
    border: 1.5px solid #C7BEBE;
    border-bottom-width: 2.5px;
    border-radius: 6px;
    transition: all 0.3s ease;
}

.input-box input:focus,
.input-box input:valid {
    border-color: #E74C3C;
}

form .policy {
    display: flex;
    align-items: center;
}

form h3 {
    color: #707070;
    font-size: 14px;
    font-weight: 500;
    margin-left: 10px;
}

.input-box.button input {
    color: #fff;
    letter-spacing: 1px;
    border: none;
    background: #E74C3C;
    cursor: pointer;
}

.input-box.button input:hover {
    background: #222222;
}

form .text h3 {
    color: #333;
    width: 100%;
    text-align: center;
}

form .text h3 a {
    color: #4070f4;
    text-decoration: none;
}

form .text h3 a:hover {
    text-decoration: underline;
}
</style>