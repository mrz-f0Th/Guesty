<?php
/* Smarty version 3.1.45, created on 2022-07-29 06:34:52
  from 'C:\xampp\htdocs\buku_tamu_gagal\app\templates\admin\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62e3636cc11d88_12573585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11fca35f753ed8a84ee818746279fd76c29e6982' => 
    array (
      0 => 'C:\\xampp\\htdocs\\buku_tamu_gagal\\app\\templates\\admin\\dashboard.tpl',
      1 => 1659069291,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e3636cc11d88_12573585 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
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
        <div class=" flex items-center justify-between pb-6">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" />
                <h2 class="text-gray-600 text-3xl font-semibold">Data Siswa</h2>
            </div>
            <div class="flex items-center justify-between">

                <div class="lg:ml-40 ml-10 space-x-8">
                    <button
                        class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">New
                        Report</button>
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
                                    Nama
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Asal Institusi
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Tujuan
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
                                            <div class="flex-shrink-0 w-10 h-10">
                                                <img class="w-full h-full rounded-full" src="./Media/tamu/<?php echo $_smarty_tpl->tpl_vars['data']->value->foto;?>
"
                                                    alt="" />
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    <?php echo $_smarty_tpl->tpl_vars['data']->value->nama;?>

                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap"><?php echo $_smarty_tpl->tpl_vars['data']->value->institusi;?>
</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            <?php echo $_smarty_tpl->tpl_vars['data']->value->tujuan;?>

                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <button class="bg-red-500 hover:bg-red-400 font-semibold py-1 px-3 rounded "><a
                                                class="text-red-300 hover:text-red-500"
                                                href="hapus/fotoId<?php echo $_smarty_tpl->tpl_vars['data']->value->foto;?>
">Hapus</a></button>
                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                    <div
                        class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                        <span class="text-xs xs:text-sm text-gray-900">
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




    
    <div class="grid grid-cols-2 gap-4 w-full px-4 mb-10">
        <div class="rounded shadow p-4" id="chart">
            <form method="POST">
                <label for="jenis_kelamin" class="block font-medium">Tahun Ajar</label>
                <div class="flex justify-between">
                    <select id="tahun" name="tahun" autocomplete="tahun"
                        class=" mt-1 block py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none ring-0 focus:ring focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="" disabled selected>Year</option>
                                            </select>
                    <button name="search" value="Search"
                        class="bg-indigo-600 px-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">Search</button>
                </div>

            </form>
            <div class="container flex justify-center h-96">
                <div class="w-96">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
        <div class="rounded shadow h-60">
            <div class="container flex justify-center">
                <div class="w-96 mt-6">
                    <canvas id="myChart2"></canvas>
                </div>
            </div>
        </div>
    </div>
    
        <?php echo '<script'; ?>
>
            const labels = ["laki-laki", "perempuan"]
            const data = [20, 10]

            function setChart(paramsLabels, paramsData) {
                labels = paramsLabels
                data = paramsData
            }

            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        label: '# of Votes',
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132)',
                            'rgba(54, 162, 235)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            var ctx2 = document.getElementById("myChart2");
            var myChart2 = new Chart(ctx2, {
                type: "line",
                data: {
                    labels: [
                    
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data2']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['data']->value->tanggal;?>
,
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    
                    ],
                    datasets: [{
                        label: "Statistik Siswa 10 tahun",
                        data: [
                        
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data2']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                            <?php echo intval($_smarty_tpl->tpl_vars['data']->value->jumlah);?>
,
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        
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
                    }
                }
            });
        <?php echo '</script'; ?>
>
    

</body>

</html><?php }
}
