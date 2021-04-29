<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="./assets/styles/style-barravertical.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;400;700&display=swap" rel="stylesheet">
    <scrip src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js">
        </script>

        <title>TallerWEB</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixel-top">
        <div class="container">

            <a class="navbar-brand" href="#"><img src="./assets/static//Dexter_Logo3.png" class="logo-brand" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="index2.php" id="Exit">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="portafolio">
        <div class="container-fluid">
            <div class="content-center">
                <h1>actividad 1-5.</h1>

                <p>Crear un elemento que acepte solo mayusculas.</p>
                <form name="Formulario">
                    <input type="text" name="letrasMayusculas" required pattern="[A-Z]+">
                    <input type="submit" value="Validar" title="Solo letras MAYUSCULAS">
                </form>
                <br />
                <p>Crear un elemento que acepto solo números.</p>
                <form name="Formulario">
                    <input type="number" name="soloNumeros" required pattern="[1-9]*">
                    <input type="submit" value="Validar" title="Solo Numeros">
                </form>
                <br />
                <p>Crear un elemento Fecha y que verifique que la fecha valida.</p>
                <form name="Formulario">
                    <input type="date" name="fecha" required>
                    <input type="submit" value="Validar" title="Solo fechas">
                </form>
                <br />
                <p>Crear un elemento que acepte Correo Electrónico y que verifique que sea valido.</p>
                <form name="Formulario">
                    <input type="email" name="correo" required>
                    <input type="submit" value="Validar" title="Solo correos">
                </form>
                <br />
                <p>Crear un elemento Archivo y que verifique el peso del Archivo y que no se pase de uno establecido.</p>
                <form name="Formulario">
                    <input type="file" name="archivo" required>
                    <input type="reset" value="limpiar">
                </form>
                <br />
                <br />
                <p>Crear un elemento que te despliegue un Mensaje Emergente (HTML).</p>
                <div class="contenedor">
                    <article>
                        <button id="btn-abrir-popup" class="btn-abrir-popup">Abrir Ventana Emergente</button>
                    </article>

                    <div class="overlay" id="overlay">
                        <div class="popup" id="popup">
                            <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                            <h3>Hola!</h3>
                            <h4>esta es una ventana emergente.</h4>
                            <form action="">
                                <input type="submit" class="btn-submit" value="cerrar ventana">
                            </form>
                        </div>
                    </div>
                </div>
                <script src="popup.js"></script>
            </div>

            <!-- Optional JavaScript; choose one of the two! -->
            <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>