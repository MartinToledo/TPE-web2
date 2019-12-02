<?php
/* Smarty version 3.1.33, created on 2019-12-02 01:26:14
  from 'D:\xampp\htdocs\TPEWEB2\templates\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de49266681294_94583849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c0963672823235cd244fab93940fb3843a0d389' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPEWEB2\\templates\\comentarios.tpl',
      1 => 1575260772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de49266681294_94583849 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="template-vue-comentarios">
    <h3>{{subtitulo}}</h3>
    <label>Ordenar comentarios por </label>
    <select class="ordenComent" name="orden">
        <option value="fecha/ASC">fecha: menor a mayor</option>
        <option value="fecha/DESC" selected>fecha: mayor a menor</option>
        <option value="puntaje/ASC">puntaje: menor a mayor</option>
        <option value="puntaje/DESC">puntaje: mayor a menor</option>
    </select>
    <button class="ordenarComentarios">Ordenar</button>
    <p>Puntuacion promedio: {{promedioPuntaje}}</p>
    <ul class="listas">
        <li v-for="comentario in comentarios" class="listas">
            <p>{{comentario.id_usuario}}</p>
            <p>PUNTUACIÓN: {{comentario.puntaje}}</p>
            <p>{{comentario.contenido}}</p>
            <p>{{comentario.fecha}}</p>
            <button v-if="permisos == 1" v-on:click="deleteComentario(comentario.id_comentario)">Eliminar Comentario</button>
        </li>
    </ul>
</section>
<?php }
}
