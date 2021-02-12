<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $id = $_GET['id'];
        $nama_pengembangan = $_POST['nama_pengembangan'];
        
        $sql = mysqli_query($conn,"update tb_pengembangan set nama_pengembangan='$nama_pengembangan' where id_pengembangan ='$id'");
        if ($sql){
            echo "<script>alert ('Ubah Kategori Pengembangan Berhasil'); window.location='../admin/kategoriPengembangan.php'</script>";
        }else{
            echo "<script>alert('Ubah Kategori Pengembangan Gagal'); window.location='../admin/kategoriPengembangan.php'</script>";
        }
    }else{
        echo "<script>alert('Ubah Kategori Pengembangan Gagal'); window.location='../admin/kategoriPengembangan.php'</script>";
    }
?>