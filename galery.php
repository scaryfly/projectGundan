<?php
    include("./dashboard.php");
?>
    <div class="text-center">
            <h1>Galery</h1>
    </div>
    <div class="container page-top">
        <div class="row imglist">
            <?php
                $sql = mysqli_query($conn,"SELECT * FROM tb_galery");
                $num = mysqli_num_rows($sql);
                #dilakukan pengecekan apabila data kosong maka yang Empty jika akan tampil adalah Data kosong maka Tidak data akan tampil
                if($num==0)
                {
                echo "
                            <h1 class='not-found-text'><b>404 PAGE NOT FOUND</b></h1>";
                }else{
                    while($array=mysqli_fetch_array($sql))
                        {
                          echo "
                            <div class='col-lg-3 col-md-4 col-xs-6 thumb'>
                                <a href='./".$array['gambar']."' data-fancybox='images' data-caption='".$array['deskripsi']."'>
                                    <img src='./".$array['gambar']."' alt='".$array['nama_gambar']."' class='img-thumbnail'>
                                </a>
                            </div>";
                        }
                }
            ?>
        </div>
    </div>
</div>
<?php
    include("./footer.php");
?>