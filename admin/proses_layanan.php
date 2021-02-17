<?php
include ('koneksi.php');
if ($_GET['aksi']=='tambah') {
if(isset($_POST['submit'])) {
	
	$simpan=mysqli_query($koneksi,"INSERT into layanan (jenislayanan,harga) values 
	('$_POST[jenislayanan]','$_POST[harga]')");
	
	if ($simpan) {
		
		header('location:layanan.php?p=layanan');
			}
		}
	}
	
	if ($_GET['aksi']=='hapus') {
	include ('koneksi.php');
	$hapus=mysqli_query($koneksi,"DELETE FROM layanan WHERE idlayanan='$_GET[idlayanan]'");

	if($hapus){
	
	header('location:layanan.php?p=layanan');
		}
	
	}
	
	if ($_GET['aksi']=='ubah') {
	include ('koneksi.php');
	if(isset($_POST['update'])) {
	
	$update=mysqli_query($koneksi,"UPDATE layanan set jenislayanan='$_POST[jenislayanan]', harga='$_POST[harga]' WHERE idlayanan='$_GET[idlayanan]'");
	
	
	if ($update) {
		
		header('location:layanan.php?p=layanan');
	}
	}
	
	}