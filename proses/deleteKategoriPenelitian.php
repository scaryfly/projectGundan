<?php
    include("../db.php");
    $id = $_GET ['id'];
    // Pesan Hapus data
    $sql = mysqli_query($conn, "DELETE FROM tb_penelitian WHERE id_penelitian= $id");
    if($sql){
        echo "<script> alert('Delete sukses'); window.location='../admin/kategoriPenelitian.php';  </script>";
    }else{
        echo "<script> alert('Delete gagal'); window.location='../admin/kategoriPenelitian.php';  </script>";
    }
?>