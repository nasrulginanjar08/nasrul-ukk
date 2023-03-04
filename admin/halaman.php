<?php  

if (isset($_GET['url'])) {
	switch ($_GET['url']) {
			
		case 'laporan':
			include 'laporan.php';
			break;
		
// Halaman SPP
		case 'spp':
			include 'spp.php';
			break;
		case 'edit-spp':
			include 'edit-spp.php';
			break;

		case 'proses-edit-spp':
			include 'proses-edit-spp.php';
			break;

		case 'tambah-spp':
			include 'tambah-spp.php';
			break;
		case 'proses-tambah-spp':
			include 'proses-tambah-spp.php';
			break;

		case 'hapus-spp':
			include 'hapus-spp.php';
			break;

//Halaman Kelas
		case 'kelas':
			include 'kelas.php';
			break;
		case 'tambah-kelas':
			include 'tambah-kelas.php';
			break;
		case 'edit-kelas':
			include 'edit-kelas.php';
			break;
		case 'proses-tambah-kelas':
			include'proses-tambah-kelas.php';
			break;	
		case 'hapus-kelas':
			include 'hapus-kelas.php';
			break;
		case 'proses-edit-kelas':
			include 'proses-edit-kelas.php';
			break;
// Halaman Siswa
		case 'siswa':
			include 'siswa.php';
			break;
		case 'tambah-siswa':
			include 'tambah-siswa.php';
			break;
		case 'edit-siswa':
			include 'edit-siswa.php';
			break;
		case 'proses-edit-siswa':
			include 'proses-edit-siswa.php';
			break;
		case 'proses-tambah-siswa':
			include 'proses-tambah-siswa.php';
			break;
		case 'hapus-siswa':
			include 'hapus-siswa.php';
			break;
// Halaman Petugas
		case 'petugas':
			include 'petugas.php';
			break;
		case 'tambah-petugas':
			include 'tambah-petugas.php';
			break;
		case 'edit-petugas':
			include 'edit-petugas.php';
			break;
		case 'proses-edit-petugas':
			include 'proses-edit-petugas.php';
			break;
		case 'proses-tambah-petugas':
			include 'proses-tambah-petugas.php';
			break;
		case 'hapus-petugas':
			include 'hapus-petugas.php';
			break;
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
}
?>