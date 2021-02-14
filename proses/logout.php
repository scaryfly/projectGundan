<?php
        session_start();
        unset($_SESSION['user']);
        unset($_SESSION['admin']);
        echo "<script>window.location='../index.php';</script>";
?>