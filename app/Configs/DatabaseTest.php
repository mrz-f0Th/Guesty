<?php

require_once __DIR__ . '/Database.php';

$db = \BukuTamu\Configs\Database::getConnection();

echo "SUKSES membuat koneksi ke database";
