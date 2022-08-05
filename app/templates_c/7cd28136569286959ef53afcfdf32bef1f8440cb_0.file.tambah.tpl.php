<?php
/* Smarty version 3.1.45, created on 2022-07-28 05:04:24
  from 'C:\xampp\htdocs\buku_tamu_gagal\app\templates\tambah.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62e1fcb8de7719_94107078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cd28136569286959ef53afcfdf32bef1f8440cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\buku_tamu_gagal\\app\\templates\\tambah.tpl',
      1 => 1658826381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e1fcb8de7719_94107078 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.js"
    integrity="sha512-AQMSn1qO6KN85GOfvH6BWJk46LhlvepblftLHzAv1cdIyTWPBKHX+r+NOXVVw6+XQpeW4LJk/GTmoP48FLvblQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>

<div class="pl-14 pt-2 h-screen pr-2 pb-2">
    <div class="bg-emerald-50 rounded-2xl h-full overflow-auto">
        <div class="px-10 mt-8 w-full">
            <form method="POST" enctype="multipart/form-data">
                <div class="shadow-sm overflow-hidden rounded-2xl bg-white h-full">
                    <div class="px-4 py-5 sm:p-6 grid grid-cols-2">
                        <div>
                            <div class="rounded-2xl overflow-hidden w-fit ml-5">
                                <div id="my_camera"></div>
                                <div id="my_result"></div>
                                <div id="btn_camera">
                                    <a href="javascript:void(take_snapshot())"
                                        class="flex justify-center bg-emerald-900 py-1">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-8 w-8 hover:bg-emerald-500 hover:text-black p-1 rounded-full text-white"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-2">
                                <label for="nama" class="block font-medium">Nama</label>
                                <input required="" type="text" name="nama" id="nama" autocomplete="given-name"
                                    class="p-2 mt-1 focus:outline-none ring-0 focus:ring focus:ring-emerald-500 focus:border-emerald-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label for="institusi" class="block font-medium">Asal Institusi</label>
                                <input required="" type="text" name="institusi" id="institusi" autocomplete="institusi"
                                    class="p-2 mt-1 focus:outline-none ring-0 focus:ring focus:ring-emerald-500 focus:border-emerald-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                            </div>
                            <div class="col-span-7">
                                <label for="tujuan" class="block font-medium">Tujuan</label>
                                <div class="mt-1">
                                    <textarea id="tujuan" name="tujuan" rows="3"
                                        class="shadow-sm focus:outline-none ring-0 focus:ring focus:ring-emerald-500 focus:border-emerald-500 mt-1 block w-full sm:text-sm border rounded-md p-2"></textarea>
                                </div>
                            </div>
                            <div>
                                
                                <input id="mydata" type="hidden" name="mydata" value="" />
                            </div>
                        </div>
                    </div>
                    <div class=" px-4 py-3 text-right sm:px-6 bg-gray-50">
                        <button name="simpan" value="save" type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm font-medium rounded-md text-white bg-emerald-900 hover:bg-emerald-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">tambah</button>
                    </div>
            </form>
        </div>
    </div>
</div>


<?php echo '<script'; ?>
 language="JavaScript">
    Webcam.set({
        width: 320,
        height: 240,
        image_format: 'jpeg',
        jpeg_quality: 90,
        flip_horiz: true
    });

    Webcam.attach('#my_camera');


    function take_snapshot() {
        document.getElementById('btn_camera').innerHTML = `
        <a href="javascript:void(reset())"
            class="flex justify-center bg-emerald-900 py-1">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="h-8 w-8 hover:bg-emerald-00 hover:text-black p-1 rounded-full text-white"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
            </svg>
        </a>`;
        document.getElementById('my_camera').classList.toggle("hidden");
        Webcam.snap(function(data_uri) {
            document.getElementById('my_result').innerHTML = '<img src="' + data_uri +
                '"/>';
            const raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');

            document.getElementById('mydata').value = raw_image_data;
        });
    }

    function reset() {
        document.getElementById('my_result').innerHTML = '';
        document.getElementById('my_camera').classList.toggle("hidden");

        document.getElementById('btn_camera').innerHTML = `
        <a href="javascript:void(take_snapshot())"
            class="flex justify-center bg-emerald-900 py-1">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="h-8 w-8 hover:bg-green-300 hover:text-black p-1 rounded-full text-white"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
        </a>`
    }
<?php echo '</script'; ?>
><?php }
}
