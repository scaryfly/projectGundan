<?php   
    session_start();
    if( !isset($_SESSION['admin']) ){
        header("location:../login.php");
    }
    include("../db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BTIKK</title>
    <link rel="shortcut icon" type="image/x-icon" href="../gambar/x-logo.png" />


    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/contentUser.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/fy0patlyt0c45dffd6gsb7bah0kyca9of135by6ti3v4aly1/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script src='../js/sidebar.js'></script>
    <script src='../js/editor.js'></script>
    <script src='../js/secondEditor.js'></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark justify-content-between" id='navbar'>
        <a class="navbar-brand" href="#">
            <img src="../gambar/rsz_2logo.png" alt="logo">
        </a>
    </nav>
    
<div class="d-flex bg-light" id="wrapper">

<!-- Sidebar -->
<div class="bg-white border-right" id="sidebar-wrapper">
  <div class="sidebar-heading text-black">Daftar Menu</div>
  <div class="list-group list-group-flush">
    <a href="./admin.php" class="list-group-item list-group-item-action bg-white text-black ">Admin</a>
    <a href="./berita.php" class="list-group-item list-group-item-action bg-white text-black ">Berita</a> 
    <a href="./galery.php" class="list-group-item list-group-item-action bg-white text-black ">Galery</a>
  </div>
</div>

<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top" id='navbar-2'>
    <button class="btn text-black" id="menu-toggle"><i class="fa fa-bars"></i></button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item dropdown">
        <?php
           $id = $_SESSION['admin'];
           $sql = mysqli_query($conn,"SELECT nama FROM tb_login where id = $id");
           $admin = mysqli_fetch_assoc($sql); #memecahkan data row yang di pilih menjadidata dalam bentuk array 
           echo "
          <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            ".$admin['nama']."
          </a>
          <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdown'>
            <a class='dropdown-item' href='./editPassword.php?id=".$id."'>Ubah Password</a>
            <div class='dropdown-divider'></div>
            <a class='dropdown-item' href='../proses/logout.php'>Keluar</a>
          </div>";
          ?>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="card" id="user-content-wrapper">