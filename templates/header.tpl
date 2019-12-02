<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LITERARY - VENTA DE LIBROS</title>
    <base href="http://127.0.0.1/TPEWEB2/" target="_self">
    <link rel="shortcut icon" href="./styles/images/Favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./styles/style.css">
    <script src="./js/vue.js"></script>
</head>
<body class="contenedor">
    <header class="cabeceraPag">
        <h1>LITERARY</h1>
    </header>
    <nav>
        <li class="botonNav"><a href="home">Inicio</a></li>
        <li class="botonNav"><a href="Generos">Categorias</a></li>
        {if (isset($Permisos)) && (($Permisos == 1) || ($Permisos == 0))}
            {if $Permisos == 1}
                <li class="botonNav"><a href="crearCategoriaOLibro">Crear Categoria O Libro</a></li>
                <li class="botonNav"><a href="Usuarios">Usuarios</a></li>
            {/if}
            <li class="botonNav"><a href="Logout">Cerrar Sesion</a></li>
        {else}
            <li class="botonNav"><a href="Login">Ingresar</a></li>
        {/if}
    </nav>