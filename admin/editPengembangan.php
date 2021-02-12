<?php   
    include("../dashboardAdmin.php");
?>

<div class="card-title text-center" id="user-content-title">
    <h1>Edit Pengembangan</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <?php
        $id = $_GET['id'];
        $id_admin = $_SESSION['admin'];


        $sql = mysqli_query($conn,"SELECT * FROM tb_produk where id_produk = $id");
        $data = mysqli_fetch_assoc($sql);

        echo "
        <form enctype='multipart/form-data' action='../proses/editPengembangan.php?id=".$id."' method='post' style='margin-left : 10px; margin-right:10px;'>
        <div class='form-group'>
            <label for='judul'>Nama Pengembangan</label>
            <input type='text' class='form-control' name='nama_produk' id='judul' value='".$data['nama_produk']."'>
        </div>
        <div class='form-group'>
            <label for='id_pengembangan'>Kategori Penelitian</label>
            <select class='form-control' name='id_pengembangan' id='id_pengembangan'>
        ";
        
        $tampil = mysqli_query($conn,"SELECT * FROM tb_pengembangan order by id_pengembangan asc");
        $num = mysqli_num_rows($tampil);
        while($array=mysqli_fetch_array($tampil))
        {
            echo "
            <option value='".$array['id_pengembangan'];
            if(strcmp($array['id_pengembangan'],$data['id_pengembangan'])==0){
                echo "' selected>";
            }else{
                echo "'>";
            }
            echo  $array['nama_pengembangan']."</option>";
        }
        
        echo "
            </select>
        </div>
        <div class='form-group'>
            <label for='gambar'>Upload Foto</label>
            <input type='file' class='form-control' name='gambar' id='gambar' >
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
        </form>";
        ?>
    </div>      
</div>