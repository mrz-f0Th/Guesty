<?php
/* Smarty version 3.1.45, created on 2022-07-27 07:39:08
  from 'C:\xampp\htdocs\buku_tamu_gagal\app\templates\guest.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62e0cf7ca55be9_70247359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66ffbff71e9ef8444491de4979e893088d4615fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\buku_tamu_gagal\\app\\templates\\guest.tpl',
      1 => 1658900347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e0cf7ca55be9_70247359 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '212615032562e0cf7c9c4565_92688431';
?>
<div class="pl-14 pt-2 h-screen pr-2 pb-2">
    <div class="bg-emerald-50 rounded-2xl h-full overflow-auto">
        <div class="px-10 mt-8 w-full">
            <img src="./Media/japan.png" class="rounded-xl">
            <pre><?php echo var_dump($_smarty_tpl->tpl_vars['data']->value->tamu);?>
</pre>
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Informasi Personal</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Detail Informasi Pengunjung</p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Nama</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?php echo $_smarty_tpl->tpl_vars['data']->value->tamu->nama;?>
</dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Institusi</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?php echo $_smarty_tpl->tpl_vars['data']->value->tamu->institusi;?>
</dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Tujuan</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?php echo $_smarty_tpl->tpl_vars['data']->value->tamu->tujuan;?>
</dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Gambar</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <img src="./Media/japan.png" class="rounded-xl">
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
