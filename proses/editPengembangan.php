<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $id = $_GET['id'];
        
        $nama_produk = $_POST['nama_produk'];
        $deskripsi = $_POST['deskripsi'];
        $uploader = $_POST['uploader'];
        $kategori = $_POST['id_pengembangan'];


        $sql = mysqli_query($conn,"SELECT * FROM tb_produk where id_produk = '$id'");
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
        $sql = mysqli_query($conn,"update tb_produk set id_pengembangan='$kategori',gambar='$foto',nama_produk='$nama_produk',deskripsi='$deskripsi',id_admin=$uploader where id_produk=$id");
        if ($sql) {
            echo "<script>alert ('Edit Pengembangan Berhasil'); window.location='../admin/pengembangan.php'</script>";
        }else{
            echo "<script>alert ('Edit Pengembangan Gagal'); window.location='../admin/pengembangan.php'</script>";
        }
    }else{
        echo "<script>alert ('Edit Pengembangan Gagal'); window.location='../admin/pengembangan.php'</script>";
    }
?>