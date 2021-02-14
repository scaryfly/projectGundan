<?php
include('../dashboardAdmin.php');

$id = $_GET['id'];

$sql = mysqli_query($conn,"SELECT * FROM tabel_topik where id_topik = $id");
$data = mysqli_fetch_assoc($sql); #memecahkan data row yang di pilih menjadidata dalam bentuk array
?>
    <div class='d-flex justify-content-center' style='margin-top : 30px'>
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
    <div class='d-flex justify-content-center' style='margin-top : 30px'>
            <div class='card-body' >
                <h5>Daftar Komentar :</h5>
                <hr/>
                <div class='container-fluid overflow-auto' style="max-height: 500px;">
                    <div class='row'>
                        <?php
                            $komen = mysqli_query($conn,"SELECT * FROM tabel_komentar where id_topik = ".$data['id_topik']." order by id_balasan desc");
                            $num = mysqli_num_rows($komen);
                        
                            if($num!=0)
                            {
                                while($array=mysqli_fetch_array($komen))
                                {
                                    echo"<div class='col-11'>
                                            <blockquote class='blockquote'>
                                                <p class='mb-0'>".$array['isi']."</p>
                                                <footer class='blockquote-footer'>".$array['penjawab']." - ".$array['tanggal']."</footer>
                                            </blockquote>
                                        </div>
                                        <div class='col-1'>
                                            <a class='text-danger icon-action' href='../proses/deleteKomentar.php?id=".$array['id_balasan']."&id_topic=".$id."'><i class='fa fa-trash'></i></a>
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