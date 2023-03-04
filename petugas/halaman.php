<?php  

if (isset($_GET['url'])) {
	switch ($_GET['url']) {

// Halaman Pembayaran
		case 'pembayaran':
			include 'pembayaran.php';
			break;
		case 'tambah-pembayaran':
			include 'tambah-pembayaran.php';
			break;
		case 'proses-tambah-pembayaran':
			include 'proses-tambah-pembayaran.php';
			break;
		case 'history-pembayaran':
			include 'history-pembayaran.php';
			break;
		case 'hapus-pembayaran':
			include 'hapus-pembayaran.php';
			break;

			
		default:
			echo "Halaman tidak ditemukan";
			break;
	}
}else{
	echo "Selamat datang di Aplikasi pembayaran spp<br>";
	echo"Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa.<br>";
	echo "Anda Login Sebagai : ".$_SESSION['nama_petugas'];
}
?>