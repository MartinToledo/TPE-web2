<?php
/* Smarty version 3.1.33, created on 2019-12-01 16:57:50
  from 'D:\xampp\htdocs\TPEWEB2\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de41b3e4f3a90_06692687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61919b5ebc5535bd5cdab1245adc65e17b7ebee1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPEWEB2\\templates\\registro.tpl',
      1 => 1575230268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:publicidad.tpl' => 1,
  ),
),false)) {
function content_5de41b3e4f3a90_06692687 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section class="login">
        <div class="login">
            <header class="cabeceraLog">
                <h2>Registro:</h2>
            </header>
            <form class="login" method="post" action="registrarUsuario">
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
                <button class="login" type="submit">Registrar e ingresar</button>
            </form>
        </div>
    </section>
<?php $_smarty_tpl->_subTemplateRender("file:publicidad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
