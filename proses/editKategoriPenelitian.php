<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $id = $_GET['id'];
        $nama_penelitian = $_POST['nama_penelitian'];
        
        $sql = mysqli_query($conn,"update tb_penelitian set nama_penelitian='$nama_penelitian' where id_penelitian ='$id'");
        if ($sql){
            echo "<script>alert ('Ubah Kategori Penelitian Berhasil'); window.location='../admin/kategoriPenelitian.php'</script>";
        }else{
            echo "<script>alert('Ubah Kategori Penelitian Gagal'); window.location='../admin/kategoriPenelitian.php'</script>";
        }
    }else{
        echo "<script>alert('Ubah Kategori Penelitian Gagal'); window.location='../admin/kategoriPenelitian.php'</script>";
    }
?>