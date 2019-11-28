<?php
/* Smarty version 3.1.33, created on 2019-11-21 17:12:39
  from 'D:\xampp\htdocs\TPEWEB2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd6b77791dd16_40404007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e7dc29714b30de2326c6c86781e7d939e25f538' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPEWEB2\\templates\\login.tpl',
      1 => 1574351635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5dd6b77791dd16_40404007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1>Login:</h1>
    <form method="post" action="verificarLogin">
        <div>
            <label for="usuarioId">Usuario:</label>
            <input type="input" name="usuarioId" placeholder="Nombre de Usuario">
        </div>
        <div>
            <label for="passwordId">Constraseña:</label>
            <input type="password" name="passwordId" placeholder="Contraseña">
        </div>
        <div>
            <?php echo $_smarty_tpl->tpl_vars['Message']->value;?>

        </div>
        <button type="submit">Login</button>
    </form>
    <p><a href="olvideMiContraseña">¿Olvidaste tu contraseña? ¡Has click aquí para recuprarla!</a></p>
    <p><a href="Registro">¿Aun no tienes tu usuario? ¡Has click aquí para registrarte!</a></p>
<?php }
}
