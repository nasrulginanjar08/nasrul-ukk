<?php

$nisn = $_GET['nisn'];



include'../koneksi.php';
$sql = "DELETE FROM siswa WHERE nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);
if($query){
     echo"<script>
    window.location.assign('admin.php?url=siswa');
    </script>";
}else{
    echo"<script>alert('Maaf Data Tidak Terhapus'); window.location.assign('?url=siswa');</script>";
}