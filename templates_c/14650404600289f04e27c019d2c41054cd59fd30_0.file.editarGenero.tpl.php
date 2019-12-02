<?php
/* Smarty version 3.1.33, created on 2019-12-01 22:12:30
  from 'D:\xampp\htdocs\TPEWEB2\templates\editarGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de464fe9d7232_21999459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14650404600289f04e27c019d2c41054cd59fd30' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPEWEB2\\templates\\editarGenero.tpl',
      1 => 1575249148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:publicidad.tpl' => 1,
  ),
),false)) {
function content_5de464fe9d7232_21999459 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section>
        <article>
            <header class="cabeceraArt">
                <h2>Editar Genero</h2>
            </header>
            <form class="editarGenero" method="post" action="modificarGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value["id_genero"];?>
">
                <div>
                    <label for="nombre">Nombre del Genero:</label>
                    <input name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value["nombre"];?>
">
                </div>
                <input type="submit" value="Guardar Modificaciones">
            </form>
        </article>
    </section>
    <?php $_smarty_tpl->_subTemplateRender("file:publicidad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html><?php }
}
