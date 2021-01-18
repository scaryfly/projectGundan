<?php 
    include("../dashboardUser.php");
?>

    <div class="card-title text-center" id="user-content-title">
        <h1>Daftar Foto</h1>
    </div>
    <div class='card-content'>
        <div class="container">
            <button class='btn bg-primary text-white' id='btn-add-content' onclick="window.location = './inputGalery.php';">
                    <i class="fa fa-plus-square"></i>
                    <span> Tambah Foto</span>
            </button>
            <table class='table'>
                <tr class='text-center'>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Judul</th>
                    <th>Aksi</th>
                </tr>


<?php
    
    #query untuk menampilkan semua data yang berada di tabel mahasiswa
    
    $batas   = 4;
    if(!isset($_GET['halaman'])){
        $posisi  = 0;
        $halaman = 1;
    }else{
        $posisi  = ($_GET['halaman']-1) * $batas;
    }

    $no = $posisi+1;
    $tampil = mysqli_query ($conn,"SELECT * FROM tbgalery order by id_galery asc limit $posisi,$batas");
    $num = mysqli_num_rows($tampil);
    #dilakukan pengecekan apabila data kosong maka yang Empty jika akan tampil adalah Data kosong maka Tidak data akan tampil
    if($num==0)
    {
      echo "
            <tr>
              <td class='text-center' colspan='4'>
                Data Kosong
              </td>
            </tr>";
    }else
    {
      while($array=mysqli_fetch_array($tampil))
      {
        echo "
                <tr>
                    <td class='text-center'>".$no."</td>
                    <td class='text-center'> 
                        <img src='../".$array['foto']."' id='user-content-image'/> 
                    </td>
                    <td class='text-center'>".$array[ 'judul']."</td>
                    <td class='text-center' id='table-action'>
                        <a class='text-warning icon-action' href='./editGalery.php?id=".$array['id_galery']."'><i class='fa fa-edit'></i></a> 
                        <a class='text-danger icon-action' href='../proses/deleteGalery.php?id=".$array['id_galery']."'><i class='fa fa-trash'></i></a>
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
                                    $tampil = mysqli_query ($conn,"SELECT * FROM tbgalery");
                                    $num = mysqli_num_rows($tampil);
                                    $jmlhalaman = ceil($num/$batas);
                                    for($i=1;$i<=$jmlhalaman;$i++) {
                                            echo "<li class='page-item'><a class='page-link' href='berita.php?halaman=$i'>$i</a></li>";
                                    }
                                ?>
                    </div>
            </div>
        </div>
    </div>
    </div>
</div>