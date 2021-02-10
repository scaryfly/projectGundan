<?php
    include("../dashboardAdmin.php");
?>

<div class="card-title text-center" id="user-content-title">
    <h1>Input Foto</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <form enctype='multipart/form-data' action='../proses/inputGalery.php' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='gambar'>Upload Foto</label>
                <input type='file' class='form-control' name='gambar' id='gambar' required>
            </div>
            <div class='form-group'>
                <label for='judul'>Judul</label>
                <input type='text' class='form-control' name='judul' id='judul' required>
            </div>
            <div class='form-group'>
                <label for='deskripsi'>Deskripsi</label>
                <textarea class='form-control' name='deskripsi' id='deskripsi' required></textarea>
            </div>
            <?php
                $id = $_SESSION['admin'];
                echo "
                <div class='form-group'>
                    <input type='text' class='form-control' name='uploader' id='uploader' value='".$id."' hidden required>
                </div>
                "
            ?>
            <div class='form-group d-flex justify-content-center'>
                <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
            </div>
        </form>
    </div>      
</div>