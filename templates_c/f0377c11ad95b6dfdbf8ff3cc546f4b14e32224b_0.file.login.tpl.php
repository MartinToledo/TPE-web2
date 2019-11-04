<?php
/* Smarty version 3.1.33, created on 2019-10-31 23:37:22
  from 'D:\xampp\htdocs\TPESPECIALWEB2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb6222bb2979_17613688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0377c11ad95b6dfdbf8ff3cc546f4b14e32224b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPESPECIALWEB2\\templates\\login.tpl',
      1 => 1572561437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5dbb6222bb2979_17613688 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
    <form method="post" action="verificarLogin">
        <div class="form-group">
            <label for="usuarioId">Usuario</label>
            <input type="input" name="usuarioId" id="usuarioId" placeholder="Enter User">
        </div>
        <div>
            <label for="passwordId">Password</label>
            <input type="password" name="passwordId" id="passwordId" placeholder="Password">
        </div>
        <div>
            <?php echo $_smarty_tpl->tpl_vars['Message']->value;?>

        </div>
        <button type="submit">Login</button>
    </form>
<?php }
}
