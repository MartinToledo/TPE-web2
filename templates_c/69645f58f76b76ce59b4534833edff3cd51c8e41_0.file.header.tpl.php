<?php
/* Smarty version 3.1.33, created on 2019-10-31 23:28:42
  from 'D:\xampp\htdocs\TPESPECIALWEB2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb601ad130a7_85111864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69645f58f76b76ce59b4534833edff3cd51c8e41' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPESPECIALWEB2\\templates\\header.tpl',
      1 => 1572559332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbb601ad130a7_85111864 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LITERARY - VENTA DE LIBROS</title>
    <link rel="shortcut icon" href="images/Favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./styles/style.css">
    <?php echo '<script'; ?>
 src="botonMenu.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="partialRender.js"><?php echo '</script'; ?>
>
    <base href="http://localhost/TPESPECIALWEB2/" target="_self">
    <title><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</title>
</head>
<body class="contenedor">
    <button class="botonMenu">||||</button>
    <header class="cabeceraPag">
        <h1>LITERARY</h1>
    </header>
    <nav>
        <li class="botonNav"><a href="home">Inicio</a></li>
        <li class="botonNav"><a href="Generos">Categorias</a></li>
        <li class="botonNav"><a href="Login">Ingresar</a></li>
    </nav><?php }
}
