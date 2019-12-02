<?php
/* Smarty version 3.1.33, created on 2019-12-01 17:04:52
  from 'D:\xampp\htdocs\TPEWEB2\templates\recupass.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de41ce4a53bc5_75338776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c56247535b7c3fcff7aefb709b25a9e6f1b1a8a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPEWEB2\\templates\\recupass.tpl',
      1 => 1575230690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:publicidad.tpl' => 1,
  ),
),false)) {
function content_5de41ce4a53bc5_75338776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section class="login">
        <div class="login">
            <header class="cabeceraLog">
                <h2>Recuperación de Contraseña:</h2>
            </header>
            <?php if (!empty($_smarty_tpl->tpl_vars['Token']->value)) {?>
                <form class="login" method="post" action="modificarContraseñaByToken">
                    <div>
                        <input type="hidden" name="id_token" value="<?php echo $_smarty_tpl->tpl_vars['Token']->value;?>
">
                    </div>
                    <div>
                        <label for="newPassCode">Escribe Tu Nueva Contraseña:</label>
                        <input type="password" name="newPassCode" placeholder="Nueva Contraseña">
                    </div>
                    <button class="login" type="submit">Enviar nueva Contraseña</button>
                </form>
            <?php } else { ?>
                <form class="login" method="post" action="recuperarContraseña">
                    <div>
                        <label for="usuarioId">Nombre de usuario:</label>
                        <input type="text" name="usuarioId" placeholder="Nombre de Usuario">
                    </div>
                    <div>
                        <?php echo $_smarty_tpl->tpl_vars['Message']->value;?>

                    </div>
                    <button class="login" type="submit">Recuperar</button>
                </form>
            <?php }?>
        </div>
    </section>
<?php $_smarty_tpl->_subTemplateRender("file:publicidad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
