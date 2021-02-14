<?php
include('./dashboard.php');
$id_user = $_SESSION['user'];
$sql = mysqli_query($conn,"SELECT * FROM tabel_member where id_member = $id_user");
$user = mysqli_fetch_assoc($sql); #memecahkan data row yang di pilih menjadidata dalam bentuk array 
?>
    <div class='d-flex justify-content-center' style='margin-top : 30px'>
        <div class='card'style="width: 800px !important;">
            <div class='card-body' >
                <div class='container'>
                    <div class='d-flex justify-content-end'>
                        <button class='btn bg-warning text-black mb-1' id='btn-add-content' onclick='window.location = `./editProfile.php`;'>
                            <i class='fa fa-edit'></i>
                            <span>Edit Profil</span>
                        </button>
                    </div>
                    <div class='text-center'>
                        <?php
                            echo "<img class='rounded-circle' alt='foto profile' src='".$user['avatar']."'
                            data-holder-rendered='true' style='width: 250px;height: 250px;'>";
                        ?>
                    </div>
                    <div class='container'>
                        <div class='row mt-5'>
                            <div class='col-3'></div>
                            <div class='col-6'>
                                <?php
                                    echo " <div class='row'>
                                                <div class='col-md-6'>
                                                    <label>Nama Lengkap</label>
                                                </div>
                                                <div class='col-md-6'>
                                                    <p>".$user['nama_lengkap']."</p>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-6'>
                                                    <label>Jenis Kelamin</label>
                                                </div>
                                                <div class='col-md-6'>
                                                    <p>".$user['jenis_kelamin']."</p>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-6'>
                                                    <label>E-mail</label>
                                                </div>
                                                <div class='col-md-6'>
                                                    <p>".$user['email']."</p>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-6'>
                                                    <label>Username</label>
                                                </div>
                                                <div class='col-md-6'>
                                                    <p>".$user['username']."</p>
                                                </div>
                                            </div>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("./footer.php");
?>