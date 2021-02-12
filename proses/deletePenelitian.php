<?php
    include("../db.php");
    $id = $_GET ['id'];

    $sql = mysqli_query($conn, "DELETE FROM tb_produkpenelitian WHERE id_produkpenelitian= $id");
    if($sql){
        echo "<script> alert('Delete Penelitian sukses'); window.location='../admin/penelitian.php';  </script>";
    }else{
        echo "<script> alert('Delete Penelitian gagal'); window.location='../admin/penelitian.php';  </script>";
    }
?>