<?php
/* Smarty version 3.1.33, created on 2019-11-20 04:07:04
  from 'D:\xampp\htdocs\TPEWEB2\templates\editarGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd4add8f30ac2_54306901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14650404600289f04e27c019d2c41054cd59fd30' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPEWEB2\\templates\\editarGenero.tpl',
      1 => 1574219153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:publicidad.tpl' => 1,
  ),
),false)) {
function content_5dd4add8f30ac2_54306901 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section>
        <article>
            <header class="cabeceraArt">
                <h2>Editar:</h2>
            </header>
            <form method="post" action="modificarGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value["id_genero"];?>
">
                <div>
                    <label for="nombre">Descripcion:</label>
                    <textarea name="nombre"><?php echo $_smarty_tpl->tpl_vars['genero']->value["nombre"];?>
</textarea>
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
