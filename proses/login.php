<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        echo "<script>console.log('request masuk coey');</script>";
        $username = $_POST['username'];
        $password = $_POST ['password'];

//member
        $query = mysqli_query($conn,"select id_member, username, password from tabel_member where username = '".$username."'");
        if($query){
            if(mysqli_num_rows($query) > 0){
                $user = mysqli_fetch_array($query);
                if(strcmp($user['username'],$username) == 0 &&  password_verify($password, $user['password']) ){
                    session_start();
                    $_SESSION['user'] = $user['id_member'];

                    echo "<script>window.location='../adminContent/berita.php';</script>";

                }else{
                    echo "<script>alert('Username dan Password Salah');window.location='../login.php';</script>";    
                }
            }else{
//admin
                $query = mysqli_query($conn,"select id, username, password from tb_login where username = '".$username."'");
                if($query){
                    if(mysqli_num_rows($query) > 0){
                        $user = mysqli_fetch_array($query);
                        if(strcmp($user['username'],$username) == 0 &&  password_verify($password, $user['password']) ){
                            session_start();
                            $_SESSION['admin'] = $user['id'];

                            echo "<script>window.location='../admin/admin.php';</script>";

                        }else{
                            echo "<script>alert('Username dan Password Salah');window.location='../login.php';</script>";    
                        }
                    }else{
                        echo "<script>alert('Data tidak ditemukan gagal');window.location='../login.php';</script>";
                    }
            }
            }
        }else{
            echo "<script>alert('Login Gagal');window.location='../login.php';</script>";
        }
    }
?>