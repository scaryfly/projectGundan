<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $nama_lengkap = $_POST['nama_lengkap'];
        $email = $_POST ['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $username = $_POST ['username'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
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
        $tgl = date("Y-m-d");

        $list = mysqli_query($conn,"SELECT username FROM tabel_member union select username from tb_login");
        $num = mysqli_num_rows($list);
        if($num!=0)
        {
            while($l=mysqli_fetch_array($list))
            {
                if(strcmp($l['username'],$username) == 0){
                    echo "<script>alert('Username telah digunakan'); window.location='../register.php'</script>";
                }
            }

        }
        


        $query = mysqli_query($conn,"INSERT INTO tabel_member (nama_lengkap, email, password, username, jenis_kelamin, avatar, tgl_daftar) values ('$nama_lengkap', '$email', '$password', '$username','$jenis_kelamin','$foto','$tgl') ");
        if ($query){
            echo "<script>alert ('Registrasi Berhasil'); window.location='../login.php'</script>";
        }else{
            echo "<script>alert('Registrasi Gagal'); window.location='../login.php'</script>";
        }
    }else{
        echo "<script>alert('Registrasi Gagal'); window.location='../login.php'</script>";
    }
?>