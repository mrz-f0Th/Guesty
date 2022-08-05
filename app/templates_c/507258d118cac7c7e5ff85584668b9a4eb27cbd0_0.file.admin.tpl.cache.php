<?php
/* Smarty version 3.1.45, created on 2022-07-27 08:37:36
  from 'C:\xampp\htdocs\buku_tamu_gagal\app\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62e0dd30832771_64071470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '507258d118cac7c7e5ff85584668b9a4eb27cbd0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\buku_tamu_gagal\\app\\templates\\admin.tpl',
      1 => 1658903855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e0dd30832771_64071470 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '54062714962e0dd307a0ea0_96979503';
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
    <pre><?php echo var_dump($_smarty_tpl->tpl_vars['d']->value['nama']);?>
</pre>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
