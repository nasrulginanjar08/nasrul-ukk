<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<?php 
 include'../koneksi.php';
 ?>

<h5>Laporan Pembayaran SPP</h5>
<a href="cetak-laporan.php" class="btn btn-primary"> Cetak Laporan </a></br>
<hr>

 
<?php 
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<table class="table table-striped table-bordered" id="tabel-data">
    <thead>
    <tr class="fw-bold">
        <td>No</td>
        <td>NISN</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Tahun SPP</td>
        <td>Nominal Dibayar</td>
        <td>Sudah Dibayar</td>
        <td>Tanggal Dibayar</td>
        <td>Petugas</td>
        
    </tr>
    </thead>

    <?php
    if(isset($_GET['form-cari'])){
        $cari = $_GET['cari'];
        $sql = "SELECT * FROM pembayaran,siswa,kelas,spp,petugas WHERE pembayaran.nisn=siswa.nisn AND siswa.id_kelas=kelas.id_kelas AND pembayaran.id_spp=spp.id_spp AND pembayaran.id_petugas=petugas.id_petugas AND siswa.nisn like '%".$cari."%' OR siswa.nama like '%".$cari."%'";   
        $no = 1;        
    }else{
        $no = 1;
        $sql = "SELECT*FROM pembayaran,siswa,kelas,spp,petugas WHERE pembayaran.nisn=siswa.nisn AND siswa.id_kelas=kelas.id_kelas AND pembayaran.id_spp=spp.id_spp AND pembayaran.id_petugas=petugas.id_petugas ORDER BY tgl_bayar DESC";
    }
        $query = mysqli_query($koneksi, $sql);
        foreach ($query as $data ){            
            ?>
            <tbody>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nisn'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['nama_kelas'] ?></td>
                <td><?php echo $data['tahun'] ?></td>
                <td><?php echo number_format($data['nominal'],2,',',',') ;?></td>
                <td><?php echo number_format($data['jumlah_bayar'],2,',',',') ;?></td>
                <td><?php echo $data['tgl_bayar'] ?></td>
                <td><?php echo $data['nama_petugas'] ?></td>
              
            </tr>
            </tbody>
      <?php } ?>
        <script>
            $(document).ready(function(){
                $('#tabel-data').DataTable();
            });
        </script>
</table>

