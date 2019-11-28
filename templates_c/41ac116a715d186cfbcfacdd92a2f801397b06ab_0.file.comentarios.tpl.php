<?php
/* Smarty version 3.1.33, created on 2019-11-26 21:21:07
  from 'D:\xampp\htdocs\TPEWEB2\templates\vue\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dddc173f3aad5_71943729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41ac116a715d186cfbcfacdd92a2f801397b06ab' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPEWEB2\\templates\\vue\\comentarios.tpl',
      1 => 1574814032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dddc173f3aad5_71943729 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="template-vue-comentarios">
    <h3>{{subtitulo}}</h3>
    <label>Ordenar comentarios por </label>
    <select name="orden">
        <option value="fecha/ASC">fecha: menor a mayor</option>
        <option value="fecha/DESC" selected>fecha: mayor a menor</option>
        <option value="puntaje/ASC">puntaje: menor a mayor</option>
        <option value="puntaje/DESC">puntaje: mayor a menor</option>
    </select>
    <button>Ordenar</button>
    <ul>
        <li v-for="comentario in comentarios">
            <span>PUNTUACIÓN: {{comentario.puntaje}}</span>
            <span>{{comentario.id_usuario}}</span>
            <p>{{comentario.contenido}}</p>
            <span>{{comentario.fecha}}</span>
            <button v-if="Permisos == 1" data-id="{{comentario.id_comentario}}">Eliminar comentario</button>
        </li>
    </ul>
</section>
<?php }
}
