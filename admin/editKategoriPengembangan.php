<?php   
    include("../dashboardAdmin.php");
?>

<div class="card-title text-center" id="user-content-title">
    <h1>Edit Kategori Pengembangan</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <?php
        $id = $_GET['id'];

        $sql = mysqli_query($conn,"SELECT * FROM tb_pengembangan where id_pengembangan = $id");
        $data = mysqli_fetch_assoc($sql); #memecahkan data row yang di pilih menjadidata dalam bentuk array 

        echo "
        <form enctype='multipart/form-data' action='../proses/editKategoriPengembangan.php?id=".$id."' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='nama_pengembangan'>Nama Kategori</label>
                <input type='text' class='form-control' name='nama_pengembangan' id='nama_pengembangan' value='".$data['nama_pengembangan']."' required>
            </div>
            <div class='form-group d-flex justify-content-center'>
                <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
            </div>
        </form>"
        ?>
    </div>      
</div>