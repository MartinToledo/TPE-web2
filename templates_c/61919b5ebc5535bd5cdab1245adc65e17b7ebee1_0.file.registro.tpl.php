<?php
/* Smarty version 3.1.33, created on 2019-11-21 17:12:41
  from 'D:\xampp\htdocs\TPEWEB2\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd6b779a83348_53673331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61919b5ebc5535bd5cdab1245adc65e17b7ebee1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPEWEB2\\templates\\registro.tpl',
      1 => 1574351898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5dd6b779a83348_53673331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1>Registro:</h1>
    <form method="post" action="registrarUsuario">
        <div>
            <label for="usuarioId">Nombre de usuario:</label>
            <input type="text" name="usuarioId" placeholder="Nombre de Usuario">
        </div>
        <div>
            <label for="correoElec">Correo Electronico:</label>
            <input type="email" name="correoElec" placeholder="Correo Electronico">
        </div>
        <div>
            <label for="passwordId">Constraseña:</label>
            <input type="password" name="passwordId" placeholder="Contraseña">
        </div>
        <div>
            <?php echo $_smarty_tpl->tpl_vars['Message']->value;?>

        </div>
        <button type="submit">Registrar e ingresar</button>
    </form>
<?php }
}
