<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $komentar = $_POST['komentar'];
        $id_topik = $_POST['id_topik'];
        $pengirim = $_POST['pengirim'];
        
        $sql = mysqli_query($conn,"SELECT nama_lengkap FROM tabel_member where id_member = '$pengirim'");
        $data = mysqli_fetch_array($sql);
        $pengirim= $data['nama_lengkap'];
        $tgl = date("Y-m-d");
        $query = mysqli_query($conn,"INSERT INTO tabel_komentar (isi, id_topik, penjawab,tanggal) values ('$komentar','$id_topik','$pengirim','$tgl') ");
        if ($query){
            $sql = mysqli_query($conn,"SELECT total_balasan FROM tabel_topik where id_topik = '$id_topik'");
            $data = mysqli_fetch_array($sql);
            $total_balasan = (int) $data['total_balasan'];
            $total_balasan++;
            $sql = mysqli_query($conn,"update tabel_topik set total_balasan='$total_balasan' where id_topik ='$id_topik'");
            echo "<script>alert ('Pembuatan Komentar Diksusi Berhasil'); window.location='../showTopic.php?id=".$id_topik."'</script>";
        }else{
            echo "<script>alert('Pembuatan Komentar Diksusi Gagal'); window.location='../showTopic.php?id=".$id_topik."'</script>";
        }
    }else{
        echo "<script>alert('Pembuatan Komentar Diksusi Gagal'); window.location='../showTopic.php?id=".$id_topik."'</script>";
    }
?>