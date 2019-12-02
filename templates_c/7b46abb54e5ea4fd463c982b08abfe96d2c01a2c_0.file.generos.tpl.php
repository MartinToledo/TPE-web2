<?php
/* Smarty version 3.1.33, created on 2019-11-30 00:49:02
  from 'D:\xampp\htdocs\TPEWEB2\templates\generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de1e6ae07ef55_45116125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b46abb54e5ea4fd463c982b08abfe96d2c01a2c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPEWEB2\\templates\\generos.tpl',
      1 => 1575085719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:publicidad.tpl' => 1,
  ),
),false)) {
function content_5de1e6ae07ef55_45116125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section>
        <header class="cabeceraArt">
            <h2><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h2>
        </header>
        <article class="generos">
            <ul class="generos">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
                    <li class="genero"><a href="Genero/<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_genero'];?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value['nombre'];?>
</a></li>
                    <?php if ($_smarty_tpl->tpl_vars['Permisos']->value == 1) {?>
                        <button><a href="EditarGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_genero'];?>
/">EDITAR</a></button>
                        <button><a href="EliminarGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_genero'];?>
/">ELIMINAR</a></button>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </article>
    </section>
    <?php $_smarty_tpl->_subTemplateRender("file:publicidad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html><?php }
}
