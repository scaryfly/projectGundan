<?php
    include("../db.php");
    $id = $_GET ['id'];
    // Pesan Hapus data
    $sql = mysqli_query($conn, "DELETE FROM tb_pengembangan WHERE id_pengembangan = $id");
    if($sql){
        echo "<script> alert('Delete sukses'); window.location='../admin/kategoriPengembangan.php';  </script>";
    }else{
        echo "<script> alert('Delete gagal'); window.location='../admin/kategoriPengembangan.php';  </script>";
    }
?>