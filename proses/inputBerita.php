<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $uploaddir = '../gambar/' ; // upload gambar ke folder images
        $array = explode('.', $_FILES['gambar']['name']);
        $ext = end($array);
        $fileName = substr(md5(openssl_random_pseudo_bytes(20)),-20).".".$ext;
        $foto = $uploaddir.$fileName;
        if(move_uploaded_file ( $_FILES['gambar']['tmp_name'] , $foto)){
            echo "<script>console.log('success');</script>";
            $foto = 'gambar/'.$fileName;
        }else{
            echo "<script>console.log('not success');</script>";
            $foto = 'gambar/default';
        }
        $judul = $_POST['judul'];
        $berita = $_POST ['berita'];
        $query = mysqli_query($conn,"INSERT INTO tb_berita_terkini (gambar, nama_berita, isi_berita) values ('$foto', '$judul', '$berita') ");
        if ($query){
            echo "<script>alert ('Simpan Berita Berhasil'); window.location='../admin/berita.php'</script>";
        }else{
            echo "<script>alert('Simpan Berita Gagal'); window.location='../admin/berita.php'</script>";
        }
    }else{
        echo "<script>alert('Simpan Berita Gagal'); window.location='../admin/berita.php'</script>";
    }
?>