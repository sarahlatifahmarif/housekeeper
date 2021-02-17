<?php
include ('koneksi.php');
$hal=isset($_GET['p']) ? $_GET['p'] : 'housekeeper';

if ($hal=='layanan') include('layanan.php');
if ($hal=='status') include('status.php');
if ($hal=='housekeeper') include('housekeeper.php');
if ($hal=='customer') include('customer.php');
if ($hal=='transaksi') include('transaksi.php');






?>