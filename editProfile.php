<?php   
    include("./dashboard.php");
?>

<div class="card-title text-center" id="user-content-title">
    <h1>Edit Profile</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <?php
        $id = $_SESSION['user'];
        $sql = mysqli_query($conn,"SELECT * FROM tabel_member where id_member = $id");
        $data = mysqli_fetch_assoc($sql); #memecahkan data row yang di pilih menjadidata dalam bentuk array 

        echo "
        <form enctype='multipart/form-data' action='./proses/editProfile.php?id=".$id."' method='post' style='margin-left : 10px; margin-right:10px;'>
        <div class='form-group'>
            <label for='nama_lengkap'>Nama Lengkap</label>
            <input type='text' class='form-control' name='nama_lengkap' id='nama_lengkap' value='".$data['nama_lengkap']."'>
        </div>
        <div class='form-group'>
            <label for='jenis_kelamin'>Jenis Kelamin</label>
            <select class='form-control' name='jenis_kelamin' id='jenis_kelamin'>
        ";
        if(strcmp($data['jenis_kelamin'],"Laki-Laki")==0){
            echo "<option selected>Laki-Laki</option>
                  <option>Perempuan</option>";
        }else{
            echo "<option>Laki-Laki</option>
                  <option selected>Perempuan</option>";
        }
        echo "
            </select>
        </div>
        <div class='form-group'>
            <label for='email'>E-mail</label>
            <input type='text' class='form-control' name='email' id='email' value='".$data['email']."'>
        </div>
        <div class='form-group'>
            <label for='gambar'>Update Foto Profile</label>
            <input type='file' class='form-control' name='gambar' id='gambar'>
        </div>
        <div class='form-group d-flex justify-content-center'>
            <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
        </div>
        </form>"
        ?>
    </div>      
</div>