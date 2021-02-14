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
    <div class='col-8 ml-3'>
      <div class='card'style="max-width: 800px !important;">
        <div class='container mt-3'>
          <img src="./gambar/foto-kantor-btikk.jpg" class="img-fluid rounded" alt="Responsive image">
          <div class='text-center mt-3 rounded bg-primary text-white pt-2 pb-1 mb-3'>
              <h3><strong>Balai Teknologi Industri Kreatif Keramik (BTIKK)</strong></h3>
          </div>
          <div class='mb-5 ml-2 mr-2'>
            <h4 class="title mb-4"><strong>Selamat Datang</strong></h4>
            <p style="text-align: center;"><img style="float: left; margin: 0 14px 10px 0; width:200px;height:200px; " src="./gambar/ka-btikk-2018.jpg" alt=""></p>
            <p style="text-align: justify;">Balai Teknologi Industri Kreatif Keramik menjadi sebuah unit di BPPT pada tahun 1996. Sebelumnya unit ini adalah sebuah proyek bernama Proyek Penelitian dan Pengembangan Seni Keramik dan Porselin (P3SKP) Bali yang dimulai pada tahun 1982.</p>
            <p style="text-align: justify;">P3SKP adalah bentuk perwujudan kerjasama antara tiga instansi pada waktu itu, yaitu Ristek/BPPT (diwakili Prof. Dr. BJ Habibie Ing.), Pemda Tk. I Bali (diwakili Prof. Dr. Ida Bagus Mantra) dan Universitas Udayana (diwakili Prof. Dr. Ida Bagus Oka).</p>
            <p style="text-align: justify;">Ide dasarnya adalah mentransformasikan seni dan budaya Bali ke media keramik, atau dalam artian lebih sempitnya adalah melakukan diversifikasi produk dari patung kayu dan batu menjadi patung keramik. Diversifikasi produk ini dilakukan karena adanya kekhawatiran kurangnya atau tersendatnya penyediaan bahan baku sehingga mengganggu proses kreativitas. Setelah empat belas tahun berupa proyek, P3SKP berubah menjadi UPT PSTKP Bali dan saat ini di tahun 2016 menjadi Balai Teknologi Industri Kreatif Keramik.</p>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php
  include("./footer.php");
?>

