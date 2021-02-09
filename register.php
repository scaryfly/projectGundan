<?php
    include("./dashboard.php");
?>
<div class="card-title text-center" id="user-content-title">
    <h1>Registrasi Member</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <form enctype='multipart/form-data' action='./proses/registrasiMember.php' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='nama_lengkap'>Nama</label>
                <input type='text' class='form-control' name='nama_lengkap' id='nama_lengkap' required>
            </div>
            <div class='form-group'>
                <label for='email'>E-mail</label>
                <input type='email' class='form-control' name='email' id='email' required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control" name='jenis_kelamin' id="jenis_kelamin">
                    <option>Laki - Laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
            <div class='form-group'>
                <label for='gambar'>Upload Gambar Profil</label>
                <input type='file' class='form-control' name='gambar' id='gambar' required>
            </div>
            <div class='form-group'>
                <label for='username'>Username</label>
                <input type='text' class='form-control' name='username' id='username' required>
            </div>
            <div class='form-group'>
                <label for='password'>Password</label>
                <input type='password' class='form-control' name='password' id='password' required>
            </div>
            <div class='form-group d-flex justify-content-center'>
                <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
            </div>
        </form>
    </div>      
</div>
</div>
<?php
    include("./footer.php");
?>