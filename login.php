<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
}
require './database/database.php';

$post = (isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['password']) && !empty($_POST['password']));

if ($post) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $records = $conn->prepare('SELECT id, email, password FROM usuarios WHERE email=:email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';


        if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
            $_SESSION['user_id'] = $results['id'];
            header('Location: index2.php');
        } else {
            $message = 'No podemos encontrar una cuenta con esta dirección de email';
        }
    }
} else {

}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="uft-8">
    <title> Login </title>
    <link rel="stylesheet" href="./assets/styles/style-login.css">
</head>

<body>

    <div class="login-box">

        <img class="avatar" src="./assets/static/avatar.png" alt="">
        <h1> Iniciar sesion</h1>

        <form action="login.php" method="post">
            <!--USER-NAME -->
            <label for="username">Correo</label>
            <input type="text" name="email" placeholder="Ingresa un correo" required="">
            <!--USER-PASSWORD -->
            <label for="password">Contraseña</label>
            <input type="password" name="password" placeholder="Ingresa una contraseña" required="">

            <input type="submit" value="ingresar">

            <a href="signup.php">Crear Usuario</a>

            <?php if (!empty($message)) : ?>
                <h4> <?= $message ?> </h4>
            <?php endif;  ?>

        </form>

    </div>
</body>

</html>