<?php

include("database/databaseForm.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM datos WHERE IdCliente=$id";
    $result=mysqli_query($conn,$query);

    if(!$result){
        die("Operacion fallida");
    }
    $_SESSION['message']='Dato removido correctamente';
    $_SESSION['message_type'] =  'danger';
    header("Location:formulario.php");
}

?>