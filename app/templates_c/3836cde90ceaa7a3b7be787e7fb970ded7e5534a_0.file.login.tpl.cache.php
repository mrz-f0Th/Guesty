<?php
/* Smarty version 3.1.45, created on 2022-07-28 04:09:05
  from 'C:\xampp\htdocs\buku_tamu_gagal\app\templates\admin\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62e1efc1e805d9_69666071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3836cde90ceaa7a3b7be787e7fb970ded7e5534a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\buku_tamu_gagal\\app\\templates\\admin\\login.tpl',
      1 => 1658974143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e1efc1e805d9_69666071 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '115179181562e1efc1de3684_65667992';
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

        <h1>Form Login Admin</h1>
    <form method="POST">
        <input type="text" name="id">
        <input type="password" name="password">
        <button type="submit">Login</button>
    </form>
</body>

</html><?php }
}
