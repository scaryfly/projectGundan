<?php   
    session_start();
    include("./db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BTIKK</title>
    <link rel="shortcut icon" type="image/x-icon" href="./gambar/x-logo.png" />


    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/galery.css">

    
    <link href='./lib/fullcalendar/main.css' rel='stylesheet' />


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- Add fancyBox -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>



    <script src='./js/index.js'></script>
    <script src='./lib/fullcalendar/main.js'></script>
    <script src='./js/calendar.js'></script>

</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark justify-content-between" id='navbar'>
        <a class="navbar-brand" href="#">
            <img src="./gambar/rsz_2logo.png" alt="logo">
        </a>
    </nav>
    <div class=" container-fluid sticky-top" id="navbar-2">
        <div class="d-flex justify-content-around">
            <a class="navbrand" href="index.php">Beranda</a>
            <a class="navbrand" href="forum.php">Forum</a>
            <a class="navbrand" href="galery.php">Galery</a>
            <a class="navbrand" href="penelitian.php">Penelitian</a>
            <a class="navbrand" href="pengembangan.php">Pengembangan</a>
            <?php
                if( !isset($_SESSION['user']) ){
                    echo "<a class='navbrand' href='login.php'>Masuk</a>";
                }else{
                    $id_user = $_SESSION['user'];
                    $sql = mysqli_query($conn,"SELECT nama_lengkap FROM tabel_member where id_member = $id_user");
                    $user = mysqli_fetch_assoc($sql); #memecahkan data row yang di pilih menjadidata dalam bentuk array 

                    echo "
                    <a class='navbrand dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        ".$user['nama_lengkap']."
                    </a>
                    <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdown'>
                        <a class='dropdown-item' href='./profile.php'>Lihat Profil</a>
                        <div class='dropdown-divider'></div>
                        <a class='dropdown-item' href='./proses/logout.php'>Keluar</a>
                    </div>";
                }
            ?>
        </div>
    </div>
    <div class="container-fluid bg-light">
    

    