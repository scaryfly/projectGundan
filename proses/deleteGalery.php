<?php
    include("../db.php");
    $id_galery = $_GET ['id'];
    // Pesan Hapus data
    $sql = mysqli_query($conn, "DELETE FROM tb_galery WHERE id_gambar= $id_galery");
    if($sql){
        echo "<script> alert('Delete sukses'); window.location='../admin/galery.php';  </script>";
    }else{
        echo "<script> alert('Delete gagal'); window.location='../admin/galery.php';  </script>";
    }
?>