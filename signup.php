<?php
  require './database/database.php';
  $message = '';
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'El usuario se ha creado correctamente';
    } else {
      $message = 'No se ha podido crear el usuario';
    }
  }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>SignUp</title>
  <link rel="stylesheet" href="./assets/styles/style-login.css">
</head>

<body>

  <div class="register-box">

    <h1> Registro</h1>

    <form action="signup.php" method="post">
       
      <label for="username">Correo</label> 
      <input name="email" type="text" placeholder="Ingresa un correo">
     <label for="password">Contraseña</label> 
      <input name="password" type="password" placeholder="Ingresa un Password">

      <input type="submit" value="Registrarse">

      <a href="login.php">Iniciar sesion</a>

      <?php if(!empty($message)): ?>
      <h4> <?= $message ?></h4>
    <?php endif; ?>
    
    </form>    

  </div>
 
</body>

</html>