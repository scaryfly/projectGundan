<?php
include('./dashboard.php');

$id_berita = $_GET['id'];

$sql = mysqli_query($conn,"SELECT * FROM tb_berita_terkini where id = $id_berita");
$data = mysqli_fetch_assoc($sql); #memecahkan data row yang di pilih menjadidata dalam bentuk array 

$gambar = $data['gambar'];  #dapatkan gambar dari data array (row) 'gambar'
$judul = $data['nama_berita']; #dapatkan jurusan mahasiswa dari data array (row) ‘jurusan’
$berita = $data['isi_berita'];#dapatkan kelamin mahasiswa array (row) 'berita'
?>
    <div class='d-flex justify-content-center' style='margin-top : 30px'>
        <div class='card'style="width: 1300px !important;">
            <div class='card-body'>
                <div card='container'>
                    
                <?php
                    echo "
                    <h2 class='text-justify mb-5'> <b>".$judul."</b></h2>
                    <div class='text-center content'>
                        <img src='./".$gambar."' class='rounded img-thumbnail' alt='Judul Berita'> 
                    </div>
                        <p class='text-justify content'>".$berita."</p>
                    </div>"
                ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<?php
include("./footer.php");
?>