<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $nama_penelitian = $_POST['nama_penelitian'];

        $query = mysqli_query($conn,"INSERT INTO tb_penelitian (nama_penelitian) values ('$nama_penelitian') ");
        if ($query){
            echo "<script>alert ('Simpan Kategori Penelitian Berhasil'); window.location='../admin/kategoriPenelitian.php'</script>";
        }else{
            echo "<script>alert('Simpan Kategori Penelitian Gagal'); window.location='../admin/kategoriPenelitian.php'</script>";
        }
    }else{
        echo "<script>alert('Simpan Kategori Penelitian Gagal'); window.location='../admin/kategoriPenelitian.php'</script>";
    }
?>