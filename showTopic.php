<?php
include('./dashboard.php');

$id = $_GET['id'];

$sql = mysqli_query($conn,"SELECT * FROM tabel_topik where id_topik = $id");
$data = mysqli_fetch_assoc($sql); #memecahkan data row yang di pilih menjadidata dalam bentuk array
?>
    <div class='d-flex justify-content-center' style='margin-top : 30px'>
        <div class='card'style="width: 1300px !important;">
            <div class='card-body' >
                <?php
                    echo " <h4>".$data['topik']."</h4>
                    <div class='d-flex justify-content-start'>
                    <p class='mr-3'>
                        <i class='fa fa-user'></i>
                        <span>".$data['pengirim']."</span>
                    </p>
                    <p class='mr-3'>
                        <i class='fa fa-calendar'></i>
                        <span>".$data['tanggal']."</span>
                    </p>
                    <p class='mr-3'>
                        <i class='fa fa-eye'></i>
                        <span>".$data['dilihat']."</span>
                    </p>
                    </div>
                    <hr/>
                    <p>
                    ".$data['isi']."
                    </p>";
                ?>
            </div>
        </div>
    </div>
    <div class='d-flex justify-content-center' style='margin-top : 30px'>
        <div class='card'style="width: 1300px !important;">
            <div class='card-body' >
                <h5>Daftar Komentar :</h5>
                <hr/>
                <div class='container overflow-auto' style="max-height: 500px;">
                    <div class='row'>
                        <?php
                            $komen = mysqli_query($conn,"SELECT * FROM tabel_komentar where id_topik = ".$data['id_topik']." order by id_balasan desc");
                            $num = mysqli_num_rows($komen);
                        
                            if($num!=0)
                            {
                                while($array=mysqli_fetch_array($komen))
                                {
                                    echo"<div class='col-12'>
                                            <blockquote class='blockquote'>
                                                <p class='mb-0'>".$array['isi']."</p>
                                                <footer class='blockquote-footer'>".$array['penjawab']." - ".$array['tanggal']."</footer>
                                            </blockquote>
                                        </div>";
                                }
                            }else{
                                echo "
                                <div class='col-12 text-center'>
                                    <p>Belum Ada Komentar</p>
                                </div>
                                ";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='d-flex justify-content-center' style='margin-top : 30px'>
        <div class='card'style="width: 1300px !important;">
            <div class='card-body'>
                <h5>Tambah Komentar </h5>
                <hr/>
                <?php
                     if( isset($_SESSION['user']) ){
                        $user = $_SESSION['user'];
                        echo "
                        <form enctype='multipart/form-data' action='./proses/inputKomentar.php' method='post' style='margin-left : 10px; margin-right:10px;'>
                            <div class='form-group'>
                                <textarea type='text' class='form-control' name='komentar' id='komentar' required></textarea>
                            </div>
                            <div class='form-group'>
                                <input type='text' class='form-control' name='pengirim' id='pengirim' value='".$user."' hidden required>
                            </div>
                            <div class='form-group'>
                                <input type='text' class='form-control' name='id_topik' id='id_topik' value='".$id."' hidden required>
                            </div>
                            <div class='form-group d-flex justify-content-end'>
                                <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
                            </div>
                        </form>";
                    }else{
                        echo"<div class='d-flex justify-content-center'>
                                <a href='./login.php' class='btn btn-primary'>Masuk</a>
                            </div>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
include("./footer.php");
?>