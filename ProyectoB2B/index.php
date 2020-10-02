<?php
ob_start();
include("db.php");
include('includes/header.php'); ?>
<main class="container p-4">
    <div class="row">
        <div class="col-md-12">
        <table id="tabla_catalogo" class="table table-bordered">
            <thead>
            <tr>
                <th>Producto</th>
                <th>Informacion</th>
                <th>Categoria</th>
                <th>Precio en Q</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $query = "SELECT P.DESCRIPCION PRODUCTO, P.INFORMACION INFO, C.DESCRIPCION CATEGORIA, P.PRECIO PRECIO FROM CATEGORIA_PRODUCTO C, PRODUCTO P WHERE C.ID_CATEGORIA_PRODUCTO = P.ID_CATEGORIA_PRODUCTO";
            $producto = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($producto)) { ?>
                <tr>
                    <td><?php echo $row['PRODUCTO']; ?></td>
                    <td><?php echo $row['INFO']; ?></td>
                    <td><?php echo $row['CATEGORIA']; ?></td>
                    <td><?php echo $row['PRECIO']; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
</main>
<?php
include('includes/vista_catalogos.php');
include('includes/footer.php');
ob_end_flush();
?>