<?php
/* Smarty version 3.1.45, created on 2022-07-28 04:14:51
  from 'C:\xampp\htdocs\buku_tamu_gagal\app\templates\admin\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62e1f11b422660_44288853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e756eb651b548a902993b47782f49540549d9ba9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\buku_tamu_gagal\\app\\templates\\admin\\register.tpl',
      1 => 1658974449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e1f11b422660_44288853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '195433684162e1f11b3ad515_93694535';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
        <p><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</p>
    <?php }?>

    <h1>Form Register Admin</h1>
    <form action="" method="POST">
        <input type="text" name="id">
        <input type="text" name="name">
        <input type="password" name="password">
        <button type="submit">Register</button>
    </form>
</body>

</html><?php }
}
