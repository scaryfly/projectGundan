<?php
    include("../dashboardAdmin.php");
?>

<div class="card-title text-center" id="user-content-title">
    <h1>Input Pengembangan</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <form enctype='multipart/form-data' action='../proses/inputPengembangan.php' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='nama_produk'>Nama Pengembangan</label>
                <input type='text' class='form-control' name='nama_produk' id='nama_produk' required>
            </div>
            <div class="form-group">
                <label for="id_pengembangan">Kategori Pengembangan</label>
                <select class="form-control" name='id_pengembangan' id="id_pengembangan">
                    <?php
                        $tampil = mysqli_query($conn,"SELECT * FROM tb_pengembangan order by id_pengembangan asc");
                        $num = mysqli_num_rows($tampil);
                        while($array=mysqli_fetch_array($tampil))
                        {
                          echo "
                            <option value='".$array['id_pengembangan']."'>".$array['nama_pengembangan']."</option>
                            ";
                        }
                    ?>
                </select>
            </div>
            <div class='form-group'>
                <label for='gambar'>Upload Foto</label>
                <input type='file' class='form-control' name='gambar' id='gambar' required>
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