<?php
/* Smarty version 3.1.33, created on 2019-12-01 21:35:34
  from 'D:\xampp\htdocs\TPEWEB2\templates\usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de45c56e464e3_53819855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77749d853454c113637acfa22befa19e9ca68def' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPEWEB2\\templates\\usuarios.tpl',
      1 => 1575246932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:publicidad.tpl' => 1,
  ),
),false)) {
function content_5de45c56e464e3_53819855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section>
        <header class="cabeceraArt">
            <h2>Todos los Usuarios</h2>
        </header>
        <div class="usuarios">
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
                    <p><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
</p>
                    <p><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
</p>
                    <button><a href="ModificarPermisosUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
"><?php if ($_smarty_tpl->tpl_vars['usuario']->value['permisos'] == 1) {?>Quitar permisos de Administrador<?php } else { ?>Dar permisos de Administrador<?php }?></a></button>
                    <button><a href="EliminarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
">ELIMINAR</a></button>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </section>
    <?php $_smarty_tpl->_subTemplateRender("file:publicidad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html><?php }
}
