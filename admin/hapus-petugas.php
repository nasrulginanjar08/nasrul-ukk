<?php
$id_petugas = $_GET['id_petugas'];

include'../koneksi.php';
$sql = "DELETE FROM petugas WHERE id_petugas='$id_petugas'";
$query = mysqli_query($koneksi, $sql);
if($query){
   echo"<script>
    window.location.assign('admin.php?url=petugas');
    </script>";
}else{
    echo"<script>alert('Maaf Data Tidak Terhapus'); window.location.assign('?url=petugas');</script>";
}