<?php
    include("./dashboard.php");
?>


<div class='card' style="margin-bottom: 200px;">
    <div class="card-title text-center mt-3 mb-5" id="user-content-title">
        <h1>Daftar Penelitian</h1>
    </div>
    <div class='card-content'>
        <div class="container">
            <table class='table'>
                <tr class='text-center'>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                </tr>
<?php
    
    $batas   = 5;
    if(!isset($_GET['halaman'])){
        $posisi  = 0;
        $halaman = 1;
    }else{
        $posisi  = ($_GET['halaman']-1) * $batas;
    }

    $no = $posisi+1;
    $tampil = mysqli_query($conn,"SELECT * FROM tb_produkPenelitian order by id_produkpenelitian asc limit $posisi,$batas");
    $num = mysqli_num_rows($tampil);

    if($num==0)
    {
      echo "
            <tr>
              <td class='text-center' colspan='8'>
                Data Kosong
              </td>
            </tr>";
    }else
    {
      while($array=mysqli_fetch_array($tampil))
      {
        $kategori = $array['id_penelitian'];
        $sql = mysqli_query($conn,"SELECT nama_penelitian FROM tb_penelitian where id_penelitian = '$kategori'");
        $data = mysqli_fetch_array($sql);
        $array['id_penelitian'] = $data['nama_penelitian'];

        echo "
                <tr>
                    <td class='text-center'>".$no."</td>
                    <td class='text-center'> 
                        <img src='./".$array['gambar']."' id='user-content-image' style='width: 100px;height: 100px;'/> 
                    </td>
                    <td class='text-center'>".$array['nama_penelitian']."</td>
                    <td class='text-center'>".$array['id_penelitian']."</td>
                    <td class='text-center'>".$array['deskripsi']."</td>
                </tr>
          ";
        $no++;
      }
    }
?>
                    </table>
                    <div class='d-flex justify-content-end'>
                        <div class="text-center">
                            <ul class="pagination">
                                <?php
                                    $tampil = mysqli_query ($conn,"SELECT * FROM tb_produkPenelitian");
                                    $num = mysqli_num_rows($tampil);
                                    $jmlhalaman = ceil($num/$batas);
                                    for($i=1;$i<=$jmlhalaman;$i++) {
                                            echo "<li class='page-item'><a class='page-link' href='penelitian.php?halaman=$i'>$i</a></li>";
                                    }
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