<?php
/* Smarty version 3.1.33, created on 2019-11-20 19:57:21
  from 'D:\xampp\htdocs\TPEWEB2\templates\mensajesAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd58c91883a05_99397748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d16270c71233ad782aec862acb434dc5ed0ccdf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPEWEB2\\templates\\mensajesAdmin.tpl',
      1 => 1574276237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5dd58c91883a05_99397748 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section>
        <header class="cabeceraArt">
            <h2>¡¡¡<?php echo $_smarty_tpl->tpl_vars['Mensaje']->value;?>
!!!</h2>
        </header>
        <button><a href="<?php echo $_smarty_tpl->tpl_vars['Retorno']->value;?>
">¡¡¡ENTENDIDO!!!</a></button>
    </section>
  </body>
</html><?php }
}
