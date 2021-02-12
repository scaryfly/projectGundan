<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $nama_pengembangan = $_POST['nama_pengembangan'];

        $query = mysqli_query($conn,"INSERT INTO tb_pengembangan (nama_pengembangan) values ('$nama_pengembangan') ");
        if ($query){
            echo "<script>alert ('Simpan Kategori Pengembangan Berhasil'); window.location='../admin/kategoriPengembangan.php'</script>";
        }else{
            echo "<script>alert('Simpan Kategori Pengembangan Gagal'); window.location='../admin/kategoriPengembangan.php'</script>";
        }
    }else{
        echo "<script>alert('Simpan Kategori Pengembangan Gagal'); window.location='../admin/kategoriPengembangan.php'</script>";
    }
?>