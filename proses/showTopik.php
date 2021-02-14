<?php
    include("../db.php");
    $id = $_GET['id'];
    $sql = mysqli_query($conn,"SELECT dilihat FROM tabel_topik where id_topik = '$id'");
    $data = mysqli_fetch_array($sql);
    $dilihat = (int) $data['dilihat'];
    $dilihat++;

    
    $sql = mysqli_query($conn,"update tabel_topik set dilihat='$dilihat' where id_topik ='$id'");
    if ($sql){
        echo "<script>window.location='../showTopic.php?id=".$id."'</script>";
    }else{
        echo "<script>window.location='../forum.php'</script>";
    }
    
?>