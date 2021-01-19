<?php   
    include("../dashboardUser.php");
?>

<div class="card-title text-center" id="user-content-title">
    <h1>Edit Penjelasan Pelayanan Jasa</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <?php
        $id = $_GET['id'];

        $sql = mysqli_query($conn,"SELECT * FROM tb_pelayananjasa where id_pelayananJasa = $id");
        $data = mysqli_fetch_assoc($sql); #memecahkan data row yang di pilih menjadidata dalam bentuk array 

        $gambar = $data['gambar'];  #dapatkan gambar dari data array (row) 'gambar'
        $judul = $data['judul']; #dapatkan jurusan mahasiswa dari data array (row) ‘jurusan’
        $informasi_jasa = $data['informasi_jasa'];#dapatkan kelamin mahasiswa array (row) 'berita'
        
        echo "
        <form enctype='multipart/form-data' action='../proses/editPenjelasanPelayananJasa.php?id=".$id."' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='judul'>Judul</label>
                <input type='text' class='form-control' name='judul' id='judul' value='".$judul."'>
            </div>
            <div class='form-group'>
                <label for='gambar'>Upload Gambar</label>
                <input type='file' class='form-control' name='gambar' id='gambar' value=".$gambar." >
            </div>
            <div class='form-group'>
                <label for='informasi_jasa'>Isi Penjelasan</label>
                <textarea class='form-control' name='informasi_jasa' id='editor' >".$informasi_jasa."</textarea>
            </div>
            <div class='form-group d-flex justify-content-center'>
                <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
            </div>
        </form>"
        ?>
    </div>      
</div>