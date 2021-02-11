<?php
    include("../db.php");
    $id = $_GET ['id'];

    $sql = mysqli_query($conn, "DELETE FROM tabel_member WHERE id_member= $id");
    if($sql){
        echo "<script> alert('Delete member sukses'); window.location='../admin/member.php';  </script>";
    }else{
        echo "<script> alert('Delete member gagal'); window.location='../admin/member.php';  </script>";
    }
?>