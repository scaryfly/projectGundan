<?php 
  include("./dashboard.php");
?>
<div  class='container'>
  <div class='row'>
    <div clas='col-4'>
      <div class='card'style="width: 300px !important;">
        <div class='card-header'>
          <p><strong>Berita Terikini</strong></p>
        </div>
        <div class='card-body overflow-auto' style='height:300px !important;'>
          <table class='table' >
            <?php
              $tampil = mysqli_query ($conn,"SELECT * FROM tb_berita_terkini order by id desc");
              $num = mysqli_num_rows($tampil);
              if($num==0)
              {

              }else{
                while($array=mysqli_fetch_array($tampil))
                {
                  echo "
                  <tr>
                    <td><a href='berita.php?id=".$array['id']."' class='btn btn-white text-left'>".$array['nama_berita']."</a></td>
                  </tr>";
                }
              }
            ?>
          </table>
        </div>
      </div>
      <div class='card mt-4'style="width: 300px !important;">
        <div class='card-header'>
          <p><strong>Kalender</strong></p>
        </div>
        <div class='card-body'>
          <div id='calendar'></div>
      </div>
      </div>
    </div>
    <div class='col-8 ml-5'>
      <div class='card'style="width: 800px !important; height: 800px !important;"></div>
    </div>
  </div>
</div>
</div>
<?php
  include("./footer.php");
?>

