<?php
    include("../db.php");
    $id = $_GET ['id'];

    $sql = mysqli_query($conn, "DELETE FROM tb_login WHERE id= $id");
    if($sql){
        echo "<script> alert('Delete admin sukses'); window.location='../admin/admin.php';  </script>";
    }else{
        echo "<script> alert('Delete admin gagal'); window.location='../admin/admin.php';  </script>";
    }
?>