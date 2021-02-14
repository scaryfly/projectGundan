<?php
    include("./dashboard.php");
?>
<div class='card' style="margin-bottom: 200px;">
    <div class="card-title text-center mt-3 mb-5" id="user-content-title">
        <h1>Daftar Topik</h1>
    </div>
    <div class='card-content'>
        <div class="container">
            <?php
                if( isset($_SESSION['user']) ){
                    echo "
                    <button class='btn bg-primary text-white mb-1' id='btn-add-content' onclick='window.location = `./inputTopik.php`;'>
                        <i class='fa fa-plus-square'></i>
                        <span> Tambah Topik</span>
                    </button>";
                }
            ?>
           
            <table class='table'>
                <tr class='text-center'>
                    <th>No</th>
                    <th>Topik</th>
                    <th><i class="fa fa-eye"></i></th>
                    <th><i class="fa fa-comment"></i></th>
                    <th>Pengirim</th>
                    <th>Tanggal Dibuat</th>
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
    $tampil = mysqli_query($conn,"SELECT * FROM tabel_topik order by id_topik asc limit $posisi,$batas");
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
        echo "
                <tr>
                    <td class='text-center'>".$no."</td>
                    <td><a href='./proses/showTopik.php?id=".$array['id_topik']."'>".$array['topik']."</a></td>
                    <td class='text-center'>".$array['dilihat']."</td>
                    <td class='text-center'>".$array['total_balasan']."</td>
                    <td class='text-center'>".$array['pengirim']."</td>
                    <td class='text-center'>".$array['tanggal']."</td>
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
                                            echo "<li class='page-item'><a class='page-link' href='forum.php?halaman=$i'>$i</a></li>";
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