<?php
include  ("database/databaseForm.php");

if(isset($_POST['save_task'])){
    $NC = $_POST['numcliente'];
    $AP = $_POST['primerapellido'];
    $AM = $_POST['segundoapellido'];
    $NOM = $_POST['nombres'];
    $NAC = $_POST['nacimiento'];
    $SEX = $_POST['sexo'];
    $RFC = $_POST['rfc'];
    $CURP = $_POST['curp'];
    $DIR = $_POST['direccion'];
    $TEL = $_POST['telefono'];
    $EMAIL = $_POST['email'];
    $STATUS = $_POST['status'];

    $query  = "INSERT INTO datos (NCliente, APaterno, AMaterno, Nombre, FNacimiento, Sexo, Rfc, Curp, Direccion,
    Telefono, Correo , Status1)  VALUES ('$NC','$AP','$AM','$NOM','$NAC','$SEX','$RFC','$CURP','$DIR','$TEL','$EMAIL','$STATUS')";
    
    $resultado  = mysqli_query($conn, $query);
    if(!$resultado){
        die("Error en Query");
    }
    $_SESSION['message']='Tarea guardada correctamente';
    $_SESSION['message_type']='success';

    header("Location: formulario.php");

  /*  echo $NC;
    echo $AP;
    echo $AM;
    echo $NOM;
    echo $NAC;
    echo $SEX;
    echo $RFC;
    echo $CURP;
    echo $DIR;
    echo $TEL;
    echo $EMAIL;
    echo $STATUS; */
}

?>