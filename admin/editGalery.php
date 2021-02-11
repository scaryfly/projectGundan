<?php   
    include("../dashboardAdmin.php");
?>

<div class="card-title text-center" id="user-content-title">
    <h1>Edit Galery</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <?php
        $id = $_GET['id'];

        $sql = mysqli_query($conn,"SELECT * FROM tb_galery where id_gambar = $id");
        $data = mysqli_fetch_assoc($sql); #memecahkan data row yang di pilih menjadidata dalam bentuk array 
        $id_admin = $_SESSION['admin'];
        $gambar = $data['gambar'];
        $judul = $data['nama_gambar'];
        $deskripsi = $data['deskripsi'];
        
        echo "
        <form enctype='multipart/form-data' action='../proses/editGalery.php?id=".$id."' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='gambar'>Upload Foto</label>
                <input type='file' class='form-control' name='gambar' id='gambar' value=".$gambar." >
            </div>
            <div class='form-group'>
                <label for='judul'>Judul</label>
                <input type='text' class='form-control' name='judul' id='judul' value='".$judul."'>
            </div>
            <div class='form-group'>
                <label for='deskripsi'>Deskripsi</label>
                <textarea class='form-control' name='deskripsi' id='deskripsi' required>".$deskripsi."</textarea>
            </div>
            <div class='form-group'>
                <input type='text' class='form-control' name='uploader' id='uploader' value='".$id_admin."' hidden required>
            </div>
            <div class='form-group d-flex justify-content-center'>
                <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
            </div>
        </form>"
        ?>
    </div>      
</div>