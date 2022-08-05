<?php
/* Smarty version 3.1.45, created on 2022-08-04 06:49:50
  from 'C:\xampp\htdocs\buku_tamu_gagal\app\templates\admin\rekap.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62eb4fee3751a0_09526275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a6697e575265d047ccd35a52acc42adb6e24778' => 
    array (
      0 => 'C:\\xampp\\htdocs\\buku_tamu_gagal\\app\\templates\\admin\\rekap.html',
      1 => 1659588589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62eb4fee3751a0_09526275 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Rekap</title>
    <?php echo '<script'; ?>
 src="https://cdn.tailwindcss.com"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"><?php echo '</script'; ?>
>
</head>

<body>
        <!-- component -->
    <div class="bg-white p-8 rounded-md w-full">
        <div class=" flex items-center justify-between">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" />
                <h2 class="text-gray-600 text-3xl font-semibold">Data Rekap Tamu</h2>

                <nav class="flex mt-4" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="/dashboard"
                                class="inline-flex items-center text-sm font-medium text-gray-600 hover:text-gray-900">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span
                                    class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Rekap</span>
                            </div>
                        </li>
                    </ol>
                </nav>

            </div>
            <div class="flex items-center justify-between">

                <div class="lg:ml-40 ml-10 flex">
                    <form method="POST" action="" class="flex align-center mx-5">
                        <input required="" type="text" name="name" id="nama" autocomplete="given-name"
                            class="p-2 focus:outline-none ring-0 focus:ring border focus:ring-emerald-500 focus:border-emerald-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md rounded-l-md rounded-none">
                        </input>
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm font-medium rounded-r-md text-white bg-emerald-700 hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg></button>
                    </form>
                    <a href="logout"
                        class="bg-red-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
                        Logout</a>
                </div>
            </div>
        </div>
        <div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Tujuan
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    tahun
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    jam
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data1']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            <div class="">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    <?php echo $_smarty_tpl->tpl_vars['data']->value->tujuan;?>

                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <?php $_smarty_tpl->_assignInScope('check_in', explode(" ",$_smarty_tpl->tpl_vars['data']->value->check_in));?>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap"><?php echo $_smarty_tpl->tpl_vars['check_in']->value[0];?>
</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            <?php echo $_smarty_tpl->tpl_vars['check_in']->value[1];?>

                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <?php $_smarty_tpl->_assignInScope('id', explode(".",$_smarty_tpl->tpl_vars['data']->value->id_tamu));?>
                                    <button data-foto="<?php echo $_smarty_tpl->tpl_vars['id']->value[0];?>
" id="hapus"
                                    class="bg-red-500 hover:bg-red-600 font-semibold py-1 px-3 rounded text-white hover:text-gray-200">
                                    Hapus</button>
                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                    <div
                        class=" px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between ">
                        <span class=" text-xs xs:text-sm text-gray-900">
                                            </span>
                                            <div class="inline-flex mt-2 xs:mt-0">
                                                <button
                                                    class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-l">
                                                    Prev
                                                    Showing 1 to 4 of 50 Entries
                                                </button>
                                                &nbsp; &nbsp;
                                                <button
                                                    class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-r">
                                                    Next
                                                </button>
                                            </div>
                                        </div>
                </div>
            </div>
        </div>

    </div>




    
    <div class="w-full px-7 mb-10">
                <div class="rounded shadow">
            <div class="container flex justify-center">
                <div class="w-5/6 mt-6 mb-6">
                    <h1 class="text-3xl font-semibold -ml-16">Statistika Harian</h1>
                    <canvas id="myChart2"></canvas>
                </div>
            </div>
        </div>
    </div>
    
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.min.js"
        integrity="sha512-Ty04j+bj8CRJsrPevkfVd05iBcD7Bx1mcLaDG4lBzDSd6aq2xmIHlCYQ31Ejr+JYBPQDjuiwS/NYDKYg5N7XKQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        const btnHapus = Array.from(document.querySelectorAll("[data-foto]"))
            .map(item => {
                item.addEventListener('click', () => {
                    Swal.fire({
                        title: 'Anda Yakin?',
                        text: "Operasi ini tidak bisa dibatalkan!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, Hapus!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Your work has been saved',
                                showConfirmButton: false,
                            })
                            document.location.pathname = `/hapus/fotoId/${item.dataset.foto}`;
                        }
                    })
                })
            })
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        var ctx2 = document.getElementById("myChart2");
        var myChart2 = new Chart(ctx2, {
            type: "line",
            data: {
                labels: [{
                        /literal} {
                        foreach $data2 as $data
                    } {
                        $data - > tanggal
                    },
                    {
                        /foreach} {
                        literal
                    }
                ],
                datasets: [{
                    label: "jumlah",
                    data: [{
                            /literal} {
                            foreach $data2 as $data
                        } {
                            intval($data - > jumlah)
                        },
                        {
                            /foreach} {
                            literal
                        }
                    ],
                    borderWidth: 0,
                    // borderWidth: 1, // works
                    borderColor: "#000000",
                    fill: true,
                    tension: 0.4,
                    backgroundColor: "#5781ff"
                    }]
                },
                options: {
                    scales: {
                        x: {},
                        y: {}
                    },
                }
            });
        <?php echo '</script'; ?>
>
    

</body>

</html><?php }
}
