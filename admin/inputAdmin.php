<?php
    include("../dashboardAdmin.php");
?>

<div class="card-title text-center" id="user-content-title">
    <h1>Input Admin</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <form enctype='multipart/form-data' action='../proses/inputAdmin.php' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='name'>Nama</label>
                <input type='text' class='form-control' name='name' id='name' required>
            </div>
            <div class='form-group'>
                <label for='username'>Username</label>
                <input type='text' class='form-control' name='username' id='username' required>
            </div>
            <div class='form-group'>
                <label for='password'>password</label>
                <input type='password' class='form-control' name='password' id='password' required>
            </div>
            <div class='form-group d-flex justify-content-center'>
                <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
            </div>
        </form>
    </div>      
</div>