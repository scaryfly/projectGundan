<?php
include('./dashboard.php');
?>
<div class='d-flex justify-content-center' style='margin-top : 30px'>
        <div class='card' id='card-login'>
            <div class='card-header text-center' >
                <h2>Masuk</h2>
            </div>
            <div class='card-body' >
                <form action='./proses/login.php' method='post'>
                    <div class='form-group'>
                        <label for='username'>Username</label>
                        <input type='text' class='form-control' name='username' id='email' placeholder='Masukan Username' required>
                    </div>
                    <div class='form-group'>
                        <label for='password'>Password</label>
                        <input type='password' class='form-control' name='password' id='password' placeholder='Password' required>
                    </div>
                    <div class='form-group d-flex justify-content-center'>
                        <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
                    </div>
                </form>
                <div class="mt-4">
					<div class="d-flex justify-content-center links">
						Belum menjadi member? <a href="./register.php" class="ml-2">Registrasi</a>
					</div>
				</div>
            </div>
        </div>
    </div>
    </div>
<?php
include("./footer.php");
?>