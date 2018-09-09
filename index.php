<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 09/09/2018
 * Time: 15:07
 */
//inicio session con PHP
session_start();
//si en caso no exista la variable de session "username" ó si esta vacía
//la variable de session "username"
if (!isset($_SESSION['username']) || empty($_SESSION['username'])){
    //mando al usuário para login.php
    header('Location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Logueo</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <h2>Página Personal</h2>
    <h2>Bienvenido señor(a): <?php echo $_SESSION['username']?></h2>
        <hr>
            <button><a href="logout.php">Salir</a></button>
</body>
</html>
