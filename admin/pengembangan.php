<?php
    include("../dashboardAdmin.php");
?>

    <div class="card-title text-center" id="user-content-title">
        <h1>Daftar Pengembangan</h1>
    </div>
    <div class='card-content'>
        <div class="container">
            <button class='btn bg-primary text-white' id='btn-add-content' onclick="window.location = './inputPengembangan.php';">
                    <i class="fa fa-plus-square"></i>
                    <span> Tambah Pengembangan</span>
            </button>
            <table class='table'>
                <tr class='text-center'>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Kategori</th>  
                    <th>Uploader</th>
                    <th>Tanggal Upload</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
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
    $tampil = mysqli_query($conn,"SELECT * FROM tb_produk order by id_produk asc limit $posisi,$batas");
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
        $uploader = $array['id_admin'];
        $sql = mysqli_query($conn,"SELECT nama FROM tb_login where id = '$uploader'");
        $data = mysqli_fetch_array($sql);
        $array['id_admin'] = $data['nama'];

        $kategori = $array['id_pengembangan'];
        $sql = mysqli_query($conn,"SELECT nama_pengembangan FROM tb_pengembangan where id_pengembangan = '$kategori'");
        $data = mysqli_fetch_array($sql);
        $array['id_pengembangan'] = $data['nama_pengembangan'];

        echo "
                <tr>
                    <td class='text-center'>".$no."</td>
                    <td class='text-center'> 
                        <img src='../".$array['gambar']."' id='user-content-image'/> 
                    </td>
                    <td class='text-center'>".$array['nama_produk']."</td>
                    <td class='text-center'>".$array['id_pengembangan']."</td>
                    <td class='text-center'>".$array['id_admin']."</td>
                    <td class='text-center'>".$array['tgl_upload']."</td>
                    <td class='text-center'>".$array['deskripsi']."</td>
                    <td class='text-center' id='table-action'>
                        <a class='text-warning icon-action' href='./editPengembangan.php?id=".$array['id_produk']."'><i class='fa fa-edit'></i></a> 
                        <a class='text-danger icon-action' href='../proses/deletePengembangan.php?id=".$array['id_produk']."'><i class='fa fa-trash'></i></a>
                    </td>
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
                                    $tampil = mysqli_query ($conn,"SELECT * FROM tb_produk");
                                    $num = mysqli_num_rows($tampil);
                                    $jmlhalaman = ceil($num/$batas);
                                    for($i=1;$i<=$jmlhalaman;$i++) {
                                            echo "<li class='page-item'><a class='page-link' href='pengembangan.php?halaman=$i'>$i</a></li>";
                                    }
                                ?>
                    </div>
            </div>
        </div>
    </div>
    </div>
</div>