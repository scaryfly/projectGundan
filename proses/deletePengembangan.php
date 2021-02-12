<?php
    include("../db.php");
    $id = $_GET ['id'];

    $sql = mysqli_query($conn, "DELETE FROM tb_produk WHERE id_produk= $id");
    if($sql){
        echo "<script> alert('Delete Pengembangan sukses'); window.location='../admin/pengembangan.php';  </script>";
    }else{
        echo "<script> alert('Delete Pengembangan gagal'); window.location='../admin/pengembangan.php';  </script>";
    }
?>