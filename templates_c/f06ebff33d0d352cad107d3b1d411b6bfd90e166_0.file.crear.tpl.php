<?php
/* Smarty version 3.1.33, created on 2019-11-20 02:07:54
  from 'D:\xampp\htdocs\TPEWEB2\templates\crear.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd491ea4384b2_34736946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f06ebff33d0d352cad107d3b1d411b6bfd90e166' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPEWEB2\\templates\\crear.tpl',
      1 => 1574209514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:publicidad.tpl' => 1,
  ),
),false)) {
function content_5dd491ea4384b2_34736946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section>
        <article>
            <header class="cabeceraArt">
                <h2>Crear Libro:</h2>
            </header>
            <form method="post" action="agregarLibro">
                <div>
                    <label for="titulo">Titulo:</label>
                    <input type="text" name="titulo" placeholder="Titulo">
                </div>
                <div>
                    <label for="descripcion">Descripcion:</label>
                    <textarea name="descripcion" placeholder="Descripcion"></textarea>
                </div>
                <div>
                    <label for="autor">Autor:</label>
                    <input type="text" name="autor" placeholder="Autor">
                </div>
                <div>
                    <label for="editorial">Editorial:</label>
                    <input type="text" name="editorial" placeholder="Editorial">
                </div>
                <div>
                    <label for="edad">Edades:</label>
                    <input type="text" name="edad" placeholder="edad">
                </div>
                <div>
                    <label for="genero">Generos:</label>
                    <select name="genero">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_genero'];?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value['nombre'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <input type="submit" value="Agregar Libro">
            </form>
        </article>
        <article>
            <header class="cabeceraArt">
                <h2>Crear Genero:</h2>
            </header>
            <form method="post" action="agregarGenero">
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" placeholder="Nombre">
                </div>
                    <input type="submit" value="Agregar Genero">
            </form>
        </article>
    </section>
    <?php $_smarty_tpl->_subTemplateRender("file:publicidad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html><?php }
}
