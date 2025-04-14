<?php
include_once '../../views/templates/header.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require '../../modelos/productos.php';

$_POST['producto_nombre'] = htmlspecialchars($_POST['producto_nombre']);
$_POST['producto_precio'] = filter_var($_POST['producto_precio'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

try{
    $nuevo_producto = new Productos($_POST);
    $resultado_guardado = $nuevo_producto->guardar();

    $resultado = [
        'mensaje' => 'PRODUCTO INGRESADO SATISFACTORIAMENTE',
        'codigo' => 1,
    ];

} catch (Exception $e){
    $resultado = [
        'mensaje' => 'OCURRIÓ UN ERROR AL INTENTAR GUARDAR EL PRODUCTO', 
        'detalle' => $e->getMessage(),
        'codigo' => 0,
    ];
}

$colores = ['danger', 'success'];
?>

<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-lg-6 bg-<?= $colores[$resultado['codigo']] ?> p-3 rounded text-white">
            <h3 class="text-center"><?= $resultado['mensaje'] ?></h3>
            <?php if (isset($resultado['detalle']) && !empty($resultado['detalle'])): ?>
                <p class="text-center"><?= $resultado['detalle'] ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-lg-3">
            <a href="/ejercicio_CRUD/views/productos/productos.php" class="btn btn-primary w-100">Volver al listado</a>
        </div>
    </div>
</div>

<?php
include_once '../../views/templates/footer.php';
?>