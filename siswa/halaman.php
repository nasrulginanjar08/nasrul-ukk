<?php  

if (isset($_GET['url'])) {
	switch ($_GET['url']) {

// Halaman Pembayaran

		case 'history-pembayaran':
			include 'history-pembayaran.php';
			break;

			case 'edit-spp':
			include 'edit-spp.php';
			break;

			
		default:
			echo "Halaman tidak ditemukan";
			break;
	}
}
?>