<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $id = $_GET['id'];
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $uploader = $_POST['uploader'];
        $sql = mysqli_query($conn,"SELECT * FROM tb_galery where id_gambar = '$id'");
        $data = mysqli_fetch_array($sql);
        $foto = $data['gambar'];
        $tmpFoto = $_FILES['gambar']['name']; //mengambil data nama file
        if(!empty($tmpFoto)){ //conditional apabila mengubah gambar
            $uploaddir = '../gambar/' ; // upload gambar ke folder images
            $fileName = $_FILES['gambar']['name'];
            $foto = $uploaddir.$fileName;
            if(move_uploaded_file ( $_FILES['gambar']['tmp_name'] , $foto)){
                echo "<script>console.log('success');</script>";
                $foto = 'gambar/'.$fileName;
            }else{
                echo "<script>console.log('not success');</script>";
                $foto = 'gambar/default';
            }
        }
        $sql = mysqli_query($conn,"update tb_galery set gambar='$foto',nama_gambar='$judul',deskripsi='$deskripsi',uploader=$uploader where id_gambar=$id");
        if ($sql) {
            echo "<script>alert ('Edit Galery Berhasil'); window.location='../admin/galery.php'</script>";
        }else{
            echo "<script>alert ('Edit Galery Gagal'); window.location='../admin/galery.php'</script>";
        }
    }else{
        echo "<script>alert ('Edit Galery Gagal'); window.location='../admin/galery.php'</script>";
    }
?>