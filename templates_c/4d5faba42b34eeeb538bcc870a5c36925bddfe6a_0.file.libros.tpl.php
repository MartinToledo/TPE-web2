<?php
/* Smarty version 3.1.33, created on 2019-11-28 13:07:07
  from 'D:\xampp\htdocs\TPEWEB2Correccion\templates\libros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddff0ab635639_29338318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d5faba42b34eeeb538bcc870a5c36925bddfe6a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPEWEB2Correccion\\templates\\libros.tpl',
      1 => 1574211996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5ddff0ab635639_29338318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section>
        <header class="cabeceraArt">
            <h2><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h2>
        </header>
        <article class="libro">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Libros']->value, 'libro');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
?>
                <ul class="lista">
                    <li>LIBRO: <?php echo $_smarty_tpl->tpl_vars['libro']->value['titulo'];?>
</li>
                    <li>AUTOR: <?php echo $_smarty_tpl->tpl_vars['libro']->value['autor'];?>
</li>
                    <li>EDITORIAL: <?php echo $_smarty_tpl->tpl_vars['libro']->value['editorial'];?>
</li>
                    <li>CATEGORIA: <a href="Genero/<?php echo $_smarty_tpl->tpl_vars['libro']->value['id_genero'];?>
"><?php echo $_smarty_tpl->tpl_vars['libro']->value['nombre'];?>
</a></li>
                    <li>EDAD: <?php echo $_smarty_tpl->tpl_vars['libro']->value['edad'];?>
</li>
                    <button><a href="Libro/<?php echo $_smarty_tpl->tpl_vars['libro']->value['id_libro'];?>
">VER LIBRO</a></button>
                <?php if ($_smarty_tpl->tpl_vars['Permisos']->value == 1) {?>
                    <button><a href="EditarLibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value['id_libro'];?>
/">EDITAR</a></button>
                    <button><a href="EliminarLibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value['id_libro'];?>
/">ELIMINAR</a></button>
                <?php }?>
                </ul>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </article>
    </section>
      </body>
</html><?php }
}
