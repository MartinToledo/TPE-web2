<?php
/* Smarty version 3.1.33, created on 2019-11-28 13:07:07
  from 'D:\xampp\htdocs\TPEWEB2Correccion\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddff0ab789915_24583982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4564ccb3ef1dac237620f35cce3e0ad15fff8c9c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPEWEB2Correccion\\templates\\header.tpl',
      1 => 1574916841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddff0ab789915_24583982 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LITERARY - VENTA DE LIBROS</title>
        <base href="http://127.0.0.1/TPEWEB2/" target="_self">
        <?php echo '<script'; ?>
 src="./js/vue.js"><?php echo '</script'; ?>
>
</head>
<body class="contenedor">
    <button class="botonMenu">||||</button>
    <header class="cabeceraPag">
        <h1>LITERARY</h1>
    </header>
    <nav>
        <li class="botonNav"><a href="home">Inicio</a></li>
        <li class="botonNav"><a href="Generos">Categorias</a></li>
        <?php if ((isset($_smarty_tpl->tpl_vars['Permisos']->value)) && (($_smarty_tpl->tpl_vars['Permisos']->value == 1) || ($_smarty_tpl->tpl_vars['Permisos']->value == 0))) {?>
            <?php if ($_smarty_tpl->tpl_vars['Permisos']->value == 1) {?>
                <li class="botonNav"><a href="crearCategoriaOLibro">Crear Categoria O Libro</a></li>
                <li class="botonNav"><a href="Usuarios">Usuarios</a></li>
            <?php }?>
            <li class="botonNav"><a href="Logout">Cerrar Sesion</a></li>
        <?php } else { ?>
            <li class="botonNav"><a href="Login">Ingresar</a></li>
        <?php }?>
    </nav><?php }
}
