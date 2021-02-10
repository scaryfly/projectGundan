<?php
    include("../db.php");
    $id_berita = $_GET ['id'];
    // Pesan Hapus data
    $sql = mysqli_query($conn, "DELETE FROM tb_berita_terkini WHERE id = $id_berita");
    if($sql){
        echo "<script> alert('Delete sukses'); window.location='../admin/berita.php';  </script>";
    }else{
        echo "<script> alert('Delete gagal'); window.location='../admin/berita.php';  </script>";
    }
?>