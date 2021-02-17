<?php
include ('koneksi.php');
if ($_GET['aksi']=='tambah') {
if(isset($_POST['submit'])) {
	
	$simpan=mysqli_query($koneksi,"INSERT into transaksi (nama,jekel,ttl,alamat,telp,pekerjaan,keterangan) values 
	('$_POST[nama]','$_POST[jekel]','$_POST[ttl]','$_POST[alamat]','$_POST[telp]','$_POST[pekerjaan]','$_POST[keterangan]')");
	
	if ($simpan) {
		
		header('location:transaksi.php?p=transaksi');
			}
		}
	}
	
	if ($_GET['aksi']=='hapus') {
	include ('koneksi.php');
	$hapus=mysqli_query($koneksi,"DELETE FROM transaksi WHERE idtransaksi='$_GET[idtransaksi]'");

	if($hapus){
	header('location:transaksi.php?p=transaksi');
		}
	}
	
	if ($_GET['aksi']=='ubah') {
	include ('koneksi.php');
	if(isset($_POST['update'])) {
	
	$update=mysqli_query($koneksi,"UPDATE transaksi set nama='$_POST[nama]', jekel='$_POST[jekel]', 
    ttl='$_POST[ttl]', alamat='$_POST[alamat]', telp='$_POST[telp]', pekerjaan='$_POST[pekerjaan]', keterangan='$_POST[keterangan]' WHERE idtransaksi='$_GET[idtransaksi]'");
	
	if ($update) {
	header('location:transaksi.php?p=transaksi');
	}}
	}