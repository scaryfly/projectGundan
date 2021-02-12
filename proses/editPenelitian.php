<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $id = $_GET['id'];
        
        $nama_penelitian = $_POST['nama_penelitian'];
        $deskripsi = $_POST['deskripsi'];
        $uploader = $_POST['uploader'];
        $kategori = $_POST['id_penelitian'];


        $sql = mysqli_query($conn,"SELECT * FROM tb_produkpenelitian where id_produkpenelitian = '$id'");
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
        $sql = mysqli_query($conn,"update tb_produkpenelitian set id_penelitian='$kategori',gambar='$foto',nama_penelitian='$nama_penelitian',deskripsi='$deskripsi',uploader=$uploader where id_produkpenelitian=$id");
        if ($sql) {
            echo "<script>alert ('Edit Penelitian Berhasil'); window.location='../admin/penelitian.php'</script>";
        }else{
            echo "<script>alert ('Edit Penelitian Gagal'); window.location='../admin/penelitian.php'</script>";
        }
    }else{
        echo "<script>alert ('Edit Penelitian Gagal'); window.location='../admin/penelitian.php'</script>";
    }
?>