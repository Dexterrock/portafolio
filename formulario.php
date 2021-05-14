<?php include("database/databaseForm.php"); ?>
<?php include("includes/header.php") ?>

<div class="container p-0">
    <h1 name="formulario" class="content-center">Formulario</h1>
    <div class="col-md-0">

        <form class="form-register" action="Save.php" method="POST">
            <h3> Numero de Cliente </h3>
            <input class="controls" type="number" name="numcliente" placeholder="Numero de cliente">
            <h3> Primer Apellido </h3>
            <input class="controls" type="text" name="primerapellido" placeholder="Primer Apellido">
            <h3> Segundo Apellido </h3>
            <input class="controls" type="text" name="segundoapellido" placeholder="Segundo Apellido">
            <h3> Nombre </h3>
            <input class="controls" type="text" name="nombres" placeholder="Nombre">
            <h3> Fecha de Nacimiento </h3>
            <input class="controls" type="date" name="nacimiento" placeholder="Fecha de nacimiento">
            <h3> Sexo </h3>
            <input class="controls" type="text" name="sexo" placeholder="sexo">
            <h3> RFC </h3>
            <input class="controls" type="text" name="rfc" placeholder="RFC">
            <h3> CURP </h3>
            <input class="controls" type="text" name="curp" placeholder="CURP">
            <h3> Dirección </h3>
            <input class="controls" type="text" name="direccion" placeholder="Dirección">
            <h3> Teléfono </h3>
            <input class="controls" type="number" name="telefono" placeholder="Telefono">
            <h3> Correo Electrónico </h3>
            <input class="controls" type="email" name="email" placeholder="Correo Electronico">
            <h3> Status </h3>
            <input class="controls" type="text" name="status" placeholder="Status">
            <br>
            <input type="submit" value="Guardar" name="save_task" class="btn btn-success btn-block">

        </form>
    </div>
    <br> <br>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Num. Cliente</th>
                <th>A. Paterno</th>
                <th>A. Materno</th>
                <th>Nombre</th>
                <th>F. Nacimiento</th>
                <th>Sexo</th>
                <th>Rfc</th>
                <th>Curp</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM datos";
            $resul_datos = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($resul_datos)) { ?>
                <tr>
                    <td> <?php echo $row['NCliente'] ?> </td>
                    <td> <?php echo $row['APaterno'] ?> </td>
                    <td> <?php echo $row['AMaterno'] ?> </td>
                    <td> <?php echo $row['Nombre'] ?> </td>
                    <td> <?php echo $row['FNacimiento'] ?> </td>
                    <td> <?php echo $row['Sexo'] ?> </td>
                    <td> <?php echo $row['Rfc'] ?> </td>
                    <td> <?php echo $row['Curp'] ?> </td>
                    <td> <?php echo $row['Direccion'] ?> </td>
                    <td> <?php echo $row['Telefono'] ?> </td>
                    <td> <?php echo $row['Correo'] ?> </td>
                    <td> <?php echo $row['Status1'] ?> </td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['IdCliente'] ?>" class="btn btn-secondary">
                            Edit
                        </a>
                        <a href="delete.php?id=<?php echo $row['IdCliente'] ?>" class="btn btn-danger">
                            Delete
                        </a>

                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php
    if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<? $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php session_unset();
    } ?>
    <input type="submit" value="IMPRIMIR PDF" name="pdf" class="btn btn-success btn-block">
</div>
<?php include("includes/footer.php") ?>