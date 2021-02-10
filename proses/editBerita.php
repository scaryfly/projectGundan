<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $id = $_GET['id'];
        $judul = $_POST['judul'];
        $berita = $_POST ['berita'];
        $sql = mysqli_query($conn,"SELECT * FROM tb_berita_terkini where id = '$id'");
        $data = mysqli_fetch_array($sql);
        $foto = $data['gambar'];
        $tmpFoto = $_FILES['gambar']['name']; //mengambil data nama file
        if(!empty($tmpFoto)){ //conditional apabila tidak mengubah gambar
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
        }
        $sql = mysqli_query($conn,"update tb_berita_terkini set gambar = '$foto', nama_berita = '$judul', isi_berita = '$berita' where id=$id");
        if ($sql) {
            echo "<script>alert ('Edit Berita Berhasil'); window.location='../admin/berita.php'</script>";
        }else{
            echo "<script>alert ('Edit Berita Gagal'); window.location='../admin/editBerita.php?id=".$id."'</script>";
        }
    }else{
        echo "<script>alert ('Edit Berita Gagal'); window.location='../admin/editBerita.php?id=".$id."'</script>";
    }
?>