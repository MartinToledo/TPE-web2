<?php
/* Smarty version 3.1.33, created on 2019-11-25 04:22:56
  from 'D:\xampp\htdocs\TPEWEB2\templates\editarLibro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddb49102f9639_51275161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '016b0bfe21b4ac96f7da49c511b733a466488cd1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPEWEB2\\templates\\editarLibro.tpl',
      1 => 1574652156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:publicidad.tpl' => 1,
  ),
),false)) {
function content_5ddb49102f9639_51275161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section>
        <article>
            <header class="cabeceraArt">
                <h2>Editar:</h2>
            </header>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ImagenesLibro']->value, 'imagenLibro');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagenLibro']->value) {
?>
                <img width="200px" src="./imagesLibros/<?php echo $_smarty_tpl->tpl_vars['imagenLibro']->value['id_imagen'];?>
">
                <button><a href="EliminarImagenLibro/<?php echo $_smarty_tpl->tpl_vars['imagenLibro']->value['id_imagen'];?>
/<?php echo $_smarty_tpl->tpl_vars['libro']->value['id_libro'];?>
">ELIMINAR IMAGEN</a></button>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <form method="post" action="modificarLibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value["id_libro"];?>
">
                <div>
                    <label for="titulo">Titulo:</label>
                    <input type="text" name="titulo" value="<?php echo $_smarty_tpl->tpl_vars['libro']->value["titulo"];?>
">
                </div>
                <div>
                    <label for="descripcion">Descripcion:</label>
                    <textarea name="descripcion"><?php echo $_smarty_tpl->tpl_vars['libro']->value["descripcion"];?>
</textarea>
                </div>
                <div>
                    <label for="autor">Autor:</label>
                    <input type="text" name="autor" value="<?php echo $_smarty_tpl->tpl_vars['libro']->value["autor"];?>
">
                </div>
                <div>
                    <label for="editorial">Editorial:</label>
                    <input type="text" name="editorial" value="<?php echo $_smarty_tpl->tpl_vars['libro']->value["editorial"];?>
">
                </div>
                <div>
                    <label for="edad">Edades:</label>
                    <input type="text" name="edad" value="<?php echo $_smarty_tpl->tpl_vars['libro']->value["edad"];?>
">
                </div>
                <div>
                    <label for="genero">Generos:</label>
                    <select name="genero">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_genero'];?>
" <?php if ($_smarty_tpl->tpl_vars['genero']->value["id_genero"] == $_smarty_tpl->tpl_vars['libro']->value["id_genero"]) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['genero']->value['nombre'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <input type="submit" value="Guardar Modificaciones">
            </form>
            <form method="post" action="agregarImagenLibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value["id_libro"];?>
" enctype="multipart/form-data" autocomplete="off">
                <label for="imagen">Seleccione La Imagen Que Desea Adjuntar:</label>
                <div>
                    <input type="file" name="imagen" accept="image/*">
                </div>
                <input type="submit" value="Adjuntar Imagen al Libro">
            </form>
        </article>
    </section>
    <?php $_smarty_tpl->_subTemplateRender("file:publicidad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html><?php }
}
