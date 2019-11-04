<?php
/* Smarty version 3.1.33, created on 2019-11-04 22:43:39
  from 'D:\xampp\htdocs\TPESPECIALWEB2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc09b8b9b6174_51585523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa657e9edb8183c9d1273b0d792059a3fbcf3e5b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPESPECIALWEB2\\templates\\home.tpl',
      1 => 1572903766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:publicidad.tpl' => 1,
  ),
),false)) {
function content_5dc09b8b9b6174_51585523 (Smarty_Internal_Template $_smarty_tpl) {
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
                </ul>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </article>
    </section>
    <?php $_smarty_tpl->_subTemplateRender("file:publicidad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html><?php }
}
