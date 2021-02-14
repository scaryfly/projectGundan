<?php
    include("../db.php");
    $id = $_GET ['id'];
    $id_topic = $_GET ['id_topic'];

    $sql = mysqli_query($conn, "DELETE FROM tabel_komentar WHERE id_balasan = $id");
    if($sql){
        $sql = mysqli_query($conn,"SELECT total_balasan FROM tabel_topik where id_topik = '$id_topic'");
        $data = mysqli_fetch_array($sql);
        $total_balasan = (int) $data['total_balasan'];
        $total_balasan--;
        $sql = mysqli_query($conn,"update tabel_topik set total_balasan='$total_balasan' where id_topik ='$id_topic'");
        echo "<script> alert('Delete komentar sukses'); window.location='../admin/showTopik.php?id=".$id_topic."';  </script>";
    }else{
        echo "<script> alert('Delete komentar gagal'); window.location='../admin/showTopik.php?id=".$id_topic."';  </script>";
    }
?>