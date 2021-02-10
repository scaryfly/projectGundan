<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $name = $_POST['name'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $username = $_POST ['username'];

        $list = mysqli_query($conn,"SELECT username FROM tabel_member union select username from tb_login");
        $num = mysqli_num_rows($list);
        if($num!=0)
        {
            while($l=mysqli_fetch_array($list))
            {
                if(strcmp($l['username'],$username) == 0){
                    echo "<script>alert('Username telah digunakan'); window.location='../admin/inputAdmin.php'</script>";
                }
            }

        }

        $query = mysqli_query($conn,"INSERT INTO tb_login (nama, password, username) values ('$name','$password', '$username') ");
        if ($query){
            echo "<script>alert ('Simpan Admin Berhasil'); window.location='../admin/admin.php'</script>";
        }else{
            echo "<script>alert('Simpan Admin Gagal'); window.location='../admin/admin.php'</script>";
        }
    }else{
        echo "<script>alert('Simpan Admin Gagal'); window.location='../admin/admin.php'</script>";
    }
?>