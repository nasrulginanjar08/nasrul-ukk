<?php 
 include'../koneksi.php';
 ?>

<h5>Laporan Pembayaran SPP</h5>
<a href="cetak-laporan.php" class="btn btn-primary"> Cetak Laporan </a></br>
<hr>

<form action="laporan.php" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<table class="table table-striped table-bordered">
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

    <?php
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $data = mysqli_query($koneksi, "SELECT*FROM pembayaran WHERE nisn LIKE '%".$cari."%'");             
    }else{
        $data = mysqli_query($koneksi, "SELECT*FROM pembayaran");       
    }
        $no = 1;
        $sql = "SELECT*FROM pembayaran,siswa,kelas,spp,petugas WHERE pembayaran.nisn=siswa.nisn AND siswa.id_kelas=kelas.id_kelas AND pembayaran.id_spp=spp.id_spp AND pembayaran.id_petugas=petugas.id_petugas ORDER BY tgl_bayar DESC";
        $query = mysqli_query($koneksi, $sql);
        foreach ($query as $data ){            
            ?>

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
            
      <?php } ?>
</table>