<?php

include("database/databaseForm.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT *FROM datos WHERE IdCliente=$id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $NC = $row['NCliente'];
        $AP = $row['APaterno'];
        $AM = $row['AMaterno'];
        $NOM = $row['Nombre'];
        $FN = $row['FNacimiento'];
        $SEX = $row['Sexo'];
        $RFC = $row['Rfc'];
        $CURP = $row['Curp'];
        $DIRE = $row['Direccion'];
        $TEL = $row['Telefono'];
        $CORR = $row['Correo'];
        $STATUS = $row['Status1'];
    }
}

if(isset($_POST['update'])){
  $id=$_GET['id'];
  
}

?>


<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4-mx-auto">
        <h2>Actualizar</h2>
             <from action="edit.php?id=<?php echo $_GET['id']?>" method="POST">
                <div class="form-group">
                    <input type="number" name="numcliente" value="<?php echo $NC; ?>" class="form-control" placeholder="Actualizar N.cliente">
                </div> 
                <div class="form-group">
                    <input type="text" name="primerapellido" value="<?php echo $AP; ?>" class="form-control" placeholder="Actualizar">
                </div>
                <div class="form-group">
                    <input type="text" name="segundoapellido" value="<?php echo $AM; ?>" class="form-control" placeholder="Actualizar">
                </div>
                <div class="form-group">
                    <input type="text" name="nombres" value="<?php echo $NOM; ?>" class="form-control" placeholder="Actualizar">
                </div>
                <div class="form-group">
                    <input type="text" name="nacimiento" value="<?php echo $FN; ?>" class="form-control" placeholder="Actualizar">
                </div>
                <div class="form-group">
                    <input type="text" name="sexo" value="<?php echo $SEX; ?>" class="form-control" placeholder="Actualizar">
                </div>
                <div class="form-group">
                    <input type="text" name="rfc" value="<?php echo $RFC; ?>" class="form-control" placeholder="Actualizar">
                </div>
                <div class="form-group">
                    <input type="text" name="curp" value="<?php echo $CURP; ?>" class="form-control" placeholder="Actualizar">
                </div>
                <div class="form-group">
                    <input type="text" name="direccion" value="<?php echo $DIRE; ?>" class="form-control" placeholder="Actualizar">
                </div>
                <div class="form-group">
                    <input type="text" name="telefono" value="<?php echo $TEL; ?>" class="form-control" placeholder="Actualizar">
                </div>
                <div class="form-group">
                    <input type="text" name="email" value="<?php echo $CORR; ?>" class="form-control" placeholder="Actualizar">
                </div>
                <div class="form-group">
                    <input type="text" name="status" value="<?php echo $STATUS; ?>" class="form-control" placeholder="Actualizar">
                </div>
                <button class="btn btn-success" name="update"> Actualizar </button>
            </from>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>