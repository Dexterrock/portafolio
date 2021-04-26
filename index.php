  <?php
  session_start();

  require './database/database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM usuarios WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
  ?>

  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <title> Bienvenido </title>
    <link rel="stylesheet" href="./assets/styles/style-index.css">
  </head>

  <body>

    <?php if (!empty($user)) : ?>
      <br> Welcome. <?= $user['email']; ?>
      <br>You are Successfully Logged In
      <a href="logout.php">Logout</a>
    <?php else : ?>

      <nav class="navbar navbar-expand-lg fixel-top">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="./assets/static/Dexter_Logo3.png" class="logo-brand" alt="logo"></a>

        </div>
        </div>
      </nav>
      <div class="box-start" id="box">
        <div class="start" id="inicio">
          <h1> Iniciar sesion o Registrate </h1>
          <a href="login.php">Iniciar sesion </a> o
          <a href="signup.php">Registrarse </a>
        <?php endif; ?>
        </div>
      </div>
  </body>

  </html>