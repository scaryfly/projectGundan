<?php   
    include("../dashboardAdmin.php");
?>

<div class="card-title text-center" id="user-content-title">
    <h1>Edit Penelitian</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <?php
        $id = $_GET['id'];
        $id_admin = $_SESSION['admin'];


        $sql = mysqli_query($conn,"SELECT * FROM tb_produkpenelitian where id_produkpenelitian = $id");
        $data = mysqli_fetch_assoc($sql);

        echo "
        <form enctype='multipart/form-data' action='../proses/editPenelitian.php?id=".$id."' method='post' style='margin-left : 10px; margin-right:10px;'>
        <div class='form-group'>
            <label for='judul'>Nama Penelitian</label>
            <input type='text' class='form-control' name='nama_penelitian' id='judul' value='".$data['nama_penelitian']."'>
        </div>
        <div class='form-group'>
            <label for='id_penelitian'>Kategori Penelitian</label>
            <select class='form-control' name='id_penelitian' id='id_penelitian'>
        ";
        
        $tampil = mysqli_query($conn,"SELECT * FROM tb_penelitian order by id_penelitian asc");
        $num = mysqli_num_rows($tampil);
        while($array=mysqli_fetch_array($tampil))
        {
            echo "
            <option value='".$array['id_penelitian'];
            if(strcmp($array['id_penelitian'],$data['id_penelitian'])==0){
                echo "' selected>";
            }else{
                echo "'>";
            }
            echo  $array['nama_penelitian']."</option>";
        }
        
        echo "
            </select>
        </div>
        <div class='form-group'>
            <label for='gambar'>Upload Foto</label>
            <input type='file' class='form-control' name='gambar' id='gambar'" >
        </div>
        <div class='form-group'>
            <label for='deskripsi'>Deskripsi</label>
            <textarea class='form-control' name='deskripsi' id='deskripsi' required>".$data['deskripsi']."</textarea>
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