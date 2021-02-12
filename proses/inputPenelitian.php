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

        $nama_penelitian = $_POST['nama_penelitian'];
        $kategori = $_POST['id_penelitian'];
        $deskripsi = $_POST['deskripsi'];
        $uploader = $_POST['uploader'];
        $tgl = date("Y-m-d");

        $query = mysqli_query($conn,"INSERT INTO tb_produkPenelitian (gambar, nama_penelitian, deskripsi, uploader, tgl_upload, id_penelitian) values ('$foto','$nama_penelitian','$deskripsi','$uploader','$tgl','$kategori') ");
        if ($query){
            echo "<script>alert ('Simpan Penelitian Berhasil'); window.location='../admin/penelitian.php'</script>";
        }else{
            echo "<script>alert('Simpan Penelitian Gagal'); window.location='../admin/penelitian.php'</script>";
        }
    }else{
        echo "<script>alert('Simpan Penelitian Gagal'); window.location='../admin/penelitian.php'</script>";
    }
?>