<?php
/* Smarty version 3.1.45, created on 2022-08-04 13:13:45
  from 'C:\xampp\htdocs\buku_tamu_gagal\app\templates\guestVefikasi.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62eba9e9c3f524_16073897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2319871ca241145aa5bee860958bbf96a4d2294' => 
    array (
      0 => 'C:\\xampp\\htdocs\\buku_tamu_gagal\\app\\templates\\guestVefikasi.html',
      1 => 1659611605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62eba9e9c3f524_16073897 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="p-3 h-screen w-full">
        <div class="bg-cyan-50 rounded-2xl h-full overflow-auto flex justify-center flex-wrap items-center">
            <div class="p-2 flex flex-wrap justify-center">
                <h1 class="mb-10 text-3xl font-semibold flex justify-center w-full">Masukan Nomor Whatsapp yang terdaftar</h1>
                <form method="POST" action="" class="flex align-center mx-5 w-1/4">
                        <input required="" type="text" name="phone" id="phone" autocomplete="given-name"
                            class="p-2 focus:outline-none ring-0 focus:ring border focus:ring-cyan-500 block w-full shadow-sm sm:text-sm border-gray-300  rounded-l-full rounded-none text-4xl font-semibold">
                        </input>
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm font-medium rounded-r-full text-white bg-cyan-500 hover:bg-cyan-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg></button>
                    </form>
            </div>
            <div id="faceio-modal"></div>
        </div>
    </div>

</body>

</html><?php }
}
