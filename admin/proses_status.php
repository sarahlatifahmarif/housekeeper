<?php

include ('koneksi.php');
if ($_GET['aksi']=='tambah') {

if(isset($_POST['submit'])) {
	
	$simpan=mysqli_query($koneksi,"INSERT into status (status) values 
	('$_POST[status]')");
	
	if ($simpan) {
		
		header('location:status.php?p=status');
			}
		}
	}
	
	if ($_GET['aksi']=='hapus') {
	
	include ('koneksi.php');

	$hapus=mysqli_query($koneksi,"DELETE FROM status WHERE idstatus='$_GET[idstatus]'");

	if($hapus){
	
	header('location:status.php?p=status');
		}
	
	}
	
	if ($_GET['aksi']=='ubah') {
	include ('koneksi.php');
	if(isset($_POST['update'])) {
	
	$update=mysqli_query($koneksi,"UPDATE status set status='$_POST[status]' WHERE idstatus='$_GET[idstatus]'");
	
	
	if ($update) {
		
		header('location:status.php?p=status');
	}
	}
	
	}