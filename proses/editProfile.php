<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $id = $_GET['id'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $email = $_POST['email'];

        $sql = mysqli_query($conn,"SELECT * FROM tabel_member where id_member = '$id'");
        $data = mysqli_fetch_array($sql);
        $foto = $data['avatar'];
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
        $sql = mysqli_query($conn,"update tabel_member set avatar='$foto',nama_lengkap='$nama_lengkap',jenis_kelamin='$jenis_kelamin',email='$email' where id_member=$id");
        if ($sql) {
            echo "<script>alert ('Edit Profile Berhasil'); window.location='../profile.php'</script>";
        }else{
            echo "<script>alert ('Edit Profile Gagal'); window.location='../profile.php'</script>";
        }
    }else{
        echo "<script>alert ('Edit Profile Gagal'); window.location='../profile.php'</script>";
    }
?>