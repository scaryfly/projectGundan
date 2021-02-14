<?php
    include("./dashboard.php");
?>
    <div class='card' style="margin-bottom: 200px;">
        <div class="card-title text-center mt-3 mb-5" id="user-content-title">
            <h1>Input Topik Diskusi</h1>
        </div>
        <div class='card-content'>
            <div class='container'>
                <form enctype='multipart/form-data' action='./proses/inputTopik.php' method='post' style='margin-left : 10px; margin-right:10px;'>
                    <div class='form-group'>
                        <label for='judul'>Judul Topik</label>
                        <input type='text' class='form-control' name='judul' id='judul' required>
                    </div>
                    <div class='form-group'>
                        <label for='isi'>Isi</label>
                        <textarea class='form-control' name='isi' id='isi' required></textarea>
                    </div>
                    <?php
                        $id = $_SESSION['user'];
                        echo "
                        <div class='form-group'>
                            <input type='text' class='form-control' name='pengirim' id='pengirim' value='".$id."' hidden required>
                        </div>
                        "
                    ?>
                    <div class='form-group d-flex justify-content-center'>
                        <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
                    </div>
                </form>
            </div>      
        </div>
    </div>
</div>
<?php
    include("./footer.php");
?>