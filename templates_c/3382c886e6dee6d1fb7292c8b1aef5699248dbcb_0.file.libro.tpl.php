<?php
/* Smarty version 3.1.33, created on 2019-11-29 00:13:17
  from 'D:\xampp\htdocs\TPEWEB2\templates\libro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de08ccd6d81e1_69025045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3382c886e6dee6d1fb7292c8b1aef5699248dbcb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPEWEB2\\templates\\libro.tpl',
      1 => 1574997194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:comentarios.tpl' => 1,
    'file:publicidad.tpl' => 1,
  ),
),false)) {
function content_5de08ccd6d81e1_69025045 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section>
        <header class="cabeceraArt">
            <h2><?php echo $_smarty_tpl->tpl_vars['Libro']->value['titulo'];?>
</h2>
        </header>
        <article class="libro">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ImagenesLibro']->value, 'imagenLibro');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagenLibro']->value) {
?>
                <img width="200px" src="./imagesLibros/<?php echo $_smarty_tpl->tpl_vars['imagenLibro']->value['id_imagen'];?>
">
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <ul class="lista">
                <li>AUTOR: <?php echo $_smarty_tpl->tpl_vars['Libro']->value['autor'];?>
</li>
                <li>EDITORIAL: <?php echo $_smarty_tpl->tpl_vars['Libro']->value['editorial'];?>
</li>
                <li>CATEGORIA: <a href="Genero/<?php echo $_smarty_tpl->tpl_vars['Libro']->value['id_genero'];?>
"><?php echo $_smarty_tpl->tpl_vars['Libro']->value['nombre'];?>
</a></li>
                <li>EDAD: <?php echo $_smarty_tpl->tpl_vars['Libro']->value['edad'];?>
</li>
                <li>DESCRIPCION: <?php echo $_smarty_tpl->tpl_vars['Libro']->value['descripcion'];?>
</li>
                <?php if ($_smarty_tpl->tpl_vars['Permisos']->value == 1) {?>
                    <button><a href="EditarLibro/<?php echo $_smarty_tpl->tpl_vars['Libro']->value['id_libro'];?>
/">EDITAR</a></button>
                    <button><a href="EliminarLibro/<?php echo $_smarty_tpl->tpl_vars['Libro']->value['id_libro'];?>
/">ELIMINAR</a></button>
                <?php }?>
            </ul>
            <input type="hidden" name="libroId" value="<?php echo $_smarty_tpl->tpl_vars['Libro']->value['id_libro'];?>
">
            <?php $_smarty_tpl->_subTemplateRender("file:comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php if (($_smarty_tpl->tpl_vars['Permisos']->value == 0) || ($_smarty_tpl->tpl_vars['Permisos']->value == 1)) {?>
                <form id="form-comentario" action="" method="post">
                    <label>Valoración:</label>
                    <select class="valoracion" name="orden">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected>5</option>
                    </select>
                    <label>Escribe tu comentario:</label>
                    <textarea name="contenidoComentario" placeholder="Comentario"></textarea>
                    <input type="submit" value="Agregar Comentario">
                </form>
            <?php }?>
        </article>
    </section>
    <?php $_smarty_tpl->_subTemplateRender("file:publicidad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '<script'; ?>
 src="./js/visitante.js"><?php echo '</script'; ?>
>
    <?php if (($_smarty_tpl->tpl_vars['Permisos']->value == 0) || ($_smarty_tpl->tpl_vars['Permisos']->value == 1)) {?>
        <?php echo '<script'; ?>
 src="./js/usuario.js"><?php echo '</script'; ?>
>
        <?php if ($_smarty_tpl->tpl_vars['Permisos']->value == 1) {?>
            <?php echo '<script'; ?>
 src="./js/admin.js"><?php echo '</script'; ?>
>
        <?php }?>
    <?php }?>
  </body>
</html><?php }
}
