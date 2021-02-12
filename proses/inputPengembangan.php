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

        $nama_produk = $_POST['nama_produk'];
        $kategori = $_POST['id_pengembangan'];
        $deskripsi = $_POST['deskripsi'];
        $uploader = $_POST['uploader'];
        $tgl = date("Y-m-d");

        $query = mysqli_query($conn,"INSERT INTO tb_produk (gambar, nama_produk, deskripsi, id_admin, tgl_upload, id_pengembangan) values ('$foto','$nama_produk','$deskripsi','$uploader','$tgl','$kategori') ");
        if ($query){
            echo "<script>alert ('Simpan Pengembangan Berhasil'); window.location='../admin/pengembangan.php'</script>";
        }else{
            echo "<script>alert('Simpan Pengembangan Gagal'); window.location='../admin/pengembangan.php'</script>";
        }
    }else{
        echo "<script>alert('Simpan Pengembangan Gagal'); window.location='../admin/pengembangan.php'</script>";
    }
?>