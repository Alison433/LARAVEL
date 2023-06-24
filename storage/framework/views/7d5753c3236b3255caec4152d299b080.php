<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQO</title>
    <link rel="icon" type="image/png" href="<?php echo e(asset('images/logoIQO.png')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/styleadministrador.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/styleproductos.css')); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="logo">
        <img src="<?php echo e(asset('images/logoIQO.png')); ?>" alt="logo">
        <h1>
            <center>INVENTORIES AND QUICK ORGANIZATION</center>
        </h1>

        <div id="mySidenav" class="sidenav">
            <i class="fa fa-address-card-o icons"></i><b></b>ADMINISTRADOR</b></a>
            <a href="<?php echo e(url ('/AdminConsultarClientes')); ?>"><i class="fa fa-users icons"></i> Consultar Clientes</a>
            <a href="<?php echo e(url ('/AdminGerenteConsultarVentas')); ?>" class="icon-a"><i class="fa fa-shopping-bag icons"></i>Consultar ventas</a>
            <a href="<?php echo e(url ('/AdminConsultarProductosVendidos')); ?>" class="icon-a"><i class="fa fa-list icons"></i> Consultar Productos Vendidos</a>
            <a href="<?php echo e(url ('/AdminRegistroTecnico')); ?>" class="icon-a"><i class="fa fa-tasks icons"></i> Registrar y consultar Tecnico</a>
            <a href="<?php echo e(url ('/AdminRegistrarProveedor')); ?>" class="icon-a"><i class="fa fa-list-alt icons"></i> Registrar y consultar Proveedor</a>
            <a href="<?php echo e(url ('/AdminRegistroProductos')); ?>" class="icon-a"><i class="fa fa-server"></i>Registrar Productos</a>
            <a href="<?php echo e(url ('/AdminConsultarProductos')); ?>" class="icon-a"><i class="fa fa-archive"></i>consultar Productos</a>
            <a href="<?php echo e(url ('/AdminRegistroOrdenesCompra')); ?>" class="icon-a"><i class="fa fa-camera-retro"></i>Ordenes de compra</a>
            <a href="<?php echo e(url ('/AdminRegistroConsultaPagos')); ?>" class="icon-a"><i class="fa fa-money"></i>Registar-Consultar Pagos</a>
            <a href="<?php echo e(url('/AdminServiciosTecnicos')); ?>" class="icon-a"><i class="fa fa-user-circle-o"></i>Servicios Tecnicos</a>
            <a href="<?php echo e(url('/Roles')); ?>">Volver a Roles</a>
            <a href="<?php echo e(url('/login')); ?>">Cerrar Sesion</a>
        </div>
        <form>
            <legend><b>CONSULTAR PRODUCTOS VENDIDOS</b></legend><br>

            <fieldset class="ventas">

                <caption><b>Datos de la Venta</b></caption>
            </fieldset>
            <legend><b></b></legend>
            <input type="text" pattern="[a-zA-Z]+" placeholder="Digite Nombre Completo">
            <input type="number" placeholder="Digite cedula o NIT">
            <input type="number" placeholder="Cod Servicio o Producto">
            <input type="date" placeholder="Digite fecha">
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpiar">

            </fieldset>
        </form>
</body>

<br>
<caption><b>PRODUCTOS Y SERVICIOS MAS VENDIDOS</b></caption>
</div>
<section class="products-list">
    <div class="product-item" category="monitores">
        <img src="<?php echo e(asset ('images/Imagencamara.png')); ?>" alt="">
        <a href="#">camara-Ref 001<br>20 unidades</a>
        $50.000

    </div>
    <div class="product-item" category="audifonos">
        <img src="<?php echo e(asset('images/ImagenDVR.png')); ?>" alt="">
        <a href="#">DVR-Ref 002<br>2 unidades</a>
        $150.000
    </div>
    <div class="product-item" category="smartphones">
        <img src="<?php echo e(asset('images/ImagenDiscoDuro.png')); ?>" alt="">
        <a href="#">Disco Duro-Ref 003<br>10 unidades</a>
        $200.000
    </div>
    <div class="product-item" category="smartphones">
        <img src="<?php echo e(asset('images/Imagenups.png')); ?>" alt="">
        <a href="#">UPS-Ref 004 <br>3 unidades</a>
        $200.000
    </div>
    <div class="product-item" category="ordenadores">
        <img src="<?php echo e(asset('images/ImagenFuentes.png')); ?>" alt="">
        <a href="#">Fuentes-Ref-005<br>2 unidades</a>
        $50.000
    </div>
    <div class="product-item" category="ordenadores">
        <img src="<?php echo e(asset('images/Imagencamarawifi.png')); ?>" alt="">
        <a href="#">Camara Wifi Ref-006 <br>5 unidades</a>
        $80.000
    </div>

</section>
</div>
</div><?php /**PATH C:\xampp\htdocs\PROYECTO_IQO\resources\views/AdminConsultarProductosVendidos.blade.php ENDPATH**/ ?>