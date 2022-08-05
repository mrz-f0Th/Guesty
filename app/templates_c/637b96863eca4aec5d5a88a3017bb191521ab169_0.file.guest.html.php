<?php
/* Smarty version 3.1.45, created on 2022-08-03 10:36:47
  from 'C:\xampp\htdocs\buku_tamu_gagal\app\templates\guest.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62ea339faf15f8_55588907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '637b96863eca4aec5d5a88a3017bb191521ab169' => 
    array (
      0 => 'C:\\xampp\\htdocs\\buku_tamu_gagal\\app\\templates\\guest.html',
      1 => 1659515799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ea339faf15f8_55588907 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="POST" enctype="multipart/form-data" class="p-3 h-screen w-full ">
            <div class="shadow-sm overflow-hidden rounded-2xl bg-white h-full">
                <div class="px-4 py-5 sm:p-6 flex justify-around mt-5">
                    <div>
                        <div class="rounded-2xl overflow-hidden w-fit ml-5">
                            <img src="../Media/tamu/<?php echo $_smarty_tpl->tpl_vars['data']->value->foto;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value->foto;?>
">
                        </div>
                    </div>
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="nama" class="block font-medium">Nama</label>
                            <input disabled value="<?php echo $_smarty_tpl->tpl_vars['data']->value->nama;?>
" required="" type="text" name="nama" id="nama" autocomplete="given-name"
                                class="p-2 mt-1 focus:outline-none ring-2 ring-cyan-500 focus:ring focus:ring-cyan-500 focus:border-cyan-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="institusi" class="block font-medium">Asal Institusi</label>
                            <input disabled value="<?php echo $_smarty_tpl->tpl_vars['data']->value->institusi;?>
" required="" type="text" name="institusi" id="institusi" autocomplete="institusi"
                                class="p-2 mt-1 focus:outline-none ring-2 ring-cyan-500 focus:ring focus:ring-cyan-500 focus:border-cyan-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="telepon" class="block font-medium">Telepon (Whatsapp)</label>
                            <input disabled value="<?php echo $_smarty_tpl->tpl_vars['data']->value->telepon;?>
" required="" type="text" name="telepon" id="telepon" autocomplete="telepon"
                                class="p-2 mt-1 focus:outline-none ring-2 ring-cyan-500 focus:ring focus:ring-cyan-500 focus:border-cyan-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="email" class="block font-medium">Email</label>
                            <input disabled value="<?php echo $_smarty_tpl->tpl_vars['data']->value->email;?>
" required="" type="email" name="email" id="email" autocomplete="email"
                                class="p-2 mt-1 focus:outline-none ring-2 ring-cyan-500 focus:ring focus:ring-cyan-500 focus:border-cyan-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                        </div>
                        <div class="col-span-6 sm:col-span-2">
                            <label for="pin" class="block font-medium">pin</label>
                            <input disabled value="<?php echo $_smarty_tpl->tpl_vars['data']->value->pin;?>
" required="" type="text" name="pin" id="pin" autocomplete="pin"
                                class="p-2 mt-1 focus:outline-none ring-2 ring-cyan-500 focus:ring focus:ring-cyan-500 focus:border-cyan-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                        </div>
                        <div class="col-span-7">
                            <label for="tujuan" class="block font-medium">Tujuan</label>
                            <div class="mt-1">
                                <textarea id="tujuan" name="tujuan" rows="3" required=""
                                    class="shadow-sm focus:outline-none ring-2 ring-cyan-500 focus:ring focus:ring-cyan-500 focus:border-cyan-500 mt-1 block w-full sm:text-sm border rounded-md p-2"></textarea>
                            </div>
                        </div>
                        <div>
                            
                                                        <input id="foto" type="hidden" name="foto" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->foto;?>
" />
                        </div>
                    </div>
                </div>
                <div class=" px-4 py-3 text-right sm:px-6 bg-gray-50">
                    <button name="simpan" value="save" type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm font-medium rounded-md text-white bg-cyan-500 hover:bg-cyan-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">tambah</button>
                </div>
        </form><?php }
}
