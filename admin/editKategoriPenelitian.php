<?php   
    include("../dashboardAdmin.php");
?>

<div class="card-title text-center" id="user-content-title">
    <h1>Edit Kategori Penelitian</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <?php
        $id = $_GET['id'];

        $sql = mysqli_query($conn,"SELECT * FROM tb_penelitian where id_penelitian = $id");
        $data = mysqli_fetch_assoc($sql); #memecahkan data row yang di pilih menjadidata dalam bentuk array 

        echo "
        <form enctype='multipart/form-data' action='../proses/editKategoriPenelitian.php?id=".$id."' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='nama_penelitian'>Nama Kategori</label>
                <input type='text' class='form-control' name='nama_penelitian' id='nama_penelitian' value='".$data['nama_penelitian']."' required>
            </div>
            <div class='form-group d-flex justify-content-center'>
                <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
            </div>
        </form>"
        ?>
    </div>      
</div>