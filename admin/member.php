<?php
    include("../dashboardAdmin.php");
?>

    <div class="card-title text-center" id="user-content-title">
        <h1>Daftar Member</h1>
    </div>
    <div class='card-content'>
        <div class="container">
            <table class='table'>
                <tr class='text-center'>
                    <th>No</th>
                    <th>Foto Profil</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Daftar</th>
                    <th>Aksi</th>
                </tr>


<?php
    
    #query untuk menampilkan semua data yang berada di tabel mahasiswa
    
    $batas   = 5;
    if(!isset($_GET['halaman'])){
        $posisi  = 0;
        $halaman = 1;
    }else{
        $posisi  = ($_GET['halaman']-1) * $batas;
    }

    $no = $posisi+1;
    $tampil = mysqli_query ($conn,"SELECT * FROM tabel_member order by id_member asc limit $posisi,$batas");
    $num = mysqli_num_rows($tampil);
    #dilakukan pengecekan apabila data kosong maka yang Empty jika akan tampil adalah Data kosong maka Tidak data akan tampil
    if($num==0)
    {
      echo "
            <tr>
              <td class='text-center' colspan='7'>
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
                        <img src='../".$array['avatar']."' id='user-content-image'/> 
                    </td>
                    <td class='text-center'>".$array['nama_lengkap']."</td>
                    <td class='text-center'>".$array['email']."</td>
                    <td class='text-center'>".$array['jenis_kelamin']."</td>
                    <td class='text-center'>".$array['tgl_daftar']."</td>
                    <td class='text-center' id='table-action'>
                        <a class='text-danger icon-action' href='../proses/deleteMember.php?id=".$array['id_member']."'><i class='fa fa-trash'></i></a>
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
                                    $tampil = mysqli_query ($conn,"SELECT * FROM tabel_member");
                                    $num = mysqli_num_rows($tampil);
                                    $jmlhalaman = ceil($num/$batas);
                                    for($i=1;$i<=$jmlhalaman;$i++) {
                                            echo "<li class='page-item'><a class='page-link' href='member.php?halaman=$i'>$i</a></li>";
                                    }
                                ?>
                    </div>
            </div>
        </div>
    </div>
    </div>
</div>