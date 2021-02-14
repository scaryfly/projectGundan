<?php
    include("../db.php");
    $id = $_GET ['id'];

    $sql = mysqli_query($conn, "DELETE FROM tabel_topik WHERE id_topik= $id");
    if($sql){
        echo "<script> alert('Delete Topic sukses'); window.location='../admin/forum.php';  </script>";
    }else{
        echo "<script> alert('Delete Topic gagal'); window.location='../admin/forum.php';  </script>";
    }
?>