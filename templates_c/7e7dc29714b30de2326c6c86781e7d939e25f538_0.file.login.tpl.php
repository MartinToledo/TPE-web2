<?php
/* Smarty version 3.1.33, created on 2019-12-01 16:58:40
  from 'D:\xampp\htdocs\TPEWEB2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de41b70264799_51482156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e7dc29714b30de2326c6c86781e7d939e25f538' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPEWEB2\\templates\\login.tpl',
      1 => 1575230317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:publicidad.tpl' => 1,
  ),
),false)) {
function content_5de41b70264799_51482156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section class="login">
        <div class="login">
        <header class="cabeceraLog">
            <h2>Ingresa Tu Usuario:</h2>
        </header>
            <form class="login" method="post" action="verificarLogin">
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
                <button class="login" type="submit">Ingresar</button>
            </form>
            <p><a href="Registro">¿Aun no tienes tu usuario? ¡Has click aquí para registrarte!</a></p>
            <p><a href="olvideMiContraseña">¿Olvidaste tu contraseña? ¡Has click aquí para recuprarla!</a></p>
        </div>
    </section>
<?php $_smarty_tpl->_subTemplateRender("file:publicidad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
