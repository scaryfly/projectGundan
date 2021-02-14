<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $pengirim = $_POST['pengirim'];
        
        $sql = mysqli_query($conn,"SELECT nama_lengkap FROM tabel_member where id_member = '$pengirim'");
        $data = mysqli_fetch_array($sql);
        $pengirim= $data['nama_lengkap'];
        $tgl = date("Y-m-d");

        $query = mysqli_query($conn,"INSERT INTO tabel_topik (pengirim, topik, isi,dilihat,total_balasan,tanggal) values ('$pengirim','$judul','$isi',0,0,'$tgl') ");
        if ($query){
            echo "<script>alert ('Pembuatan Topik Diksusi Berhasil'); window.location='../forum.php'</script>";
        }else{
            echo "<script>alert('Pembuatan Topik Diksusi Gagal'); window.location='../forum.php'</script>";
        }
    }else{
        echo "<script>alert('Pembuatan Topik Diksusi Gagal'); window.location='../forum.php'</script>";
    }
?>