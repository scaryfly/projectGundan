<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $id = $_GET['id'];
        $name = $_POST['name'];

        $sql = mysqli_query($conn,"update tb_login set nama='$name' where id='$id'");
        if ($sql){
            echo "<script>alert ('Ubah Admin Berhasil'); window.location='../admin/admin.php'</script>";
        }else{
            echo "<script>alert('Ubah Admin Gagal'); window.location='../admin/admin.php'</script>";
        }
    }else{
        echo "<script>alert('Ubah Admin Gagal'); window.location='../admin/admin.php'</script>";
    }
?>