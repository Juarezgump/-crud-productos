<?php

include_once '../templates/header.php';

?>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h2 class="text-center mb-0">REGISTRO DE PRODUCTOS</h2>
                    </div>
                    <div class="card-body">
                        <form action="/ejercicio_CRUD/controller/productos/guardar.php" method="POST" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="producto_nombre" class="form-label fw-bold">INGRESE EL NOMBRE DEL PRODUCTO</label>
                                <input type="text" id="producto_nombre" name="producto_nombre" 
                                    class="form-control" placeholder="Ingresa el nombre del producto" 
                                    required>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio. Por favor ingresa un nombre para el producto.
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="producto_precio" class="form-label fw-bold">INGRESE EL PRECIO DEL PRODUCTO</label>
                                <div class="input-group">
                                    <span class="input-group-text">Q</span>
                                    <input type="number" id="producto_precio" name="producto_precio" 
                                        class="form-control" placeholder="Ingresa el precio del producto" 
                                        required min="0" step="0.01">
                                    <div class="invalid-feedback">
                                        Este campo es obligatorio. Por favor ingresa un precio válido.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label for="producto_categoria" class="form-label fw-bold">CATEGORÍA DEL PRODUCTO</label>
                                <select class="form-select" id="producto_categoria" name="producto_categoria" required>
                                    <option value="" selected disabled>Selecciona una categoría</option>
                                    <option value="Electrónicos">Electrónicos</option>
                                    <option value="Ropa">Ropa</option>
                                    <option value="Alimentos">Alimentos</option>
                                    <option value="Hogar">Hogar</option>
                                    <option value="Otros">Otros</option>
                                </select>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio. Por favor selecciona una categoría.
                                </div>
                            </div>
                            
                            <div class="row mt-4">
                                <div class="col-md-6 mb-2">
                                    <button type="submit" class="btn btn-success w-100">
                                        Registrar Producto
                                    </button>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <button type="reset" class="btn btn-outline-secondary w-100">
                                        Limpiar Datos
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include_once '../templates/footer.php';

?>