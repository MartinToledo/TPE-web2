<?php
/* Smarty version 3.1.33, created on 2019-10-31 22:43:55
  from 'D:\xampp\htdocs\TPESPECIALWEB2\templates\libro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb559bb155e3_83720294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf8714448a5a6f9ecff93ce13d22c4b72738eda4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPESPECIALWEB2\\templates\\libro.tpl',
      1 => 1572558233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:publicidad.tpl' => 1,
  ),
),false)) {
function content_5dbb559bb155e3_83720294 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section>
        <header class="cabeceraArt">
            <h2><?php echo $_smarty_tpl->tpl_vars['Libro']->value['titulo'];?>
</h2>
        </header>
        <article class="libro">
            <ul class="lista">
                <li>AUTOR: <?php echo $_smarty_tpl->tpl_vars['Libro']->value['autor'];?>
</li>
                <li>EDITORIAL: <?php echo $_smarty_tpl->tpl_vars['Libro']->value['editorial'];?>
</li>
                <li>CATEGORIA: <a href="Genero/<?php echo $_smarty_tpl->tpl_vars['Libro']->value['id_genero'];?>
"><?php echo $_smarty_tpl->tpl_vars['Libro']->value['nombre'];?>
</a></li>
                <li>EDAD: <?php echo $_smarty_tpl->tpl_vars['Libro']->value['edad'];?>
</li>
                <li>DESCRIPCION: <?php echo $_smarty_tpl->tpl_vars['Libro']->value['descripcion'];?>
</li>
            </ul>
        </article>
    </section>
    <?php $_smarty_tpl->_subTemplateRender("file:publicidad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html><?php }
}
