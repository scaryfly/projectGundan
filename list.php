<?php
    include("./dashboardUser.php");
    include("./db.php");
    #query untuk menampilkan semua data yang berada di tabel mahasiswa
    $tampil = mysqli_query ($conn,"SELECT * FROM tbberita");
    $num = mysqli_num_rows($tampil);
    $no = 1;
    $genap = "#FFF";
    $ganjil = "#e8ecdd";
    $head = "#bbb7b6";
    #dilakukan pengecekan apabila data kosong maka yang Empty jika akan tampil adalah Data kosong maka Tidak data akan tampil
    if($num=0)
    {
      echo "
            <tr valign='top'>
              <td colspan='4'>
                diy class='msgl error'>Data Empty</div>
              </td>
            </tr>";
    }else
    {
        echo " 
            <div class='card-title text-center'>
                <h1>List Berita</h1>
            </div>
            <div class='card-content'>
                    <table class= 'table table-striped table—bordered table—hover'>
                        <tr bgcolor=".$head.">
                            <td align='center' >No</td>
                            <td width='142' align='center'>Gambar</td>
                            <td width='136' align='center'>Judul</td>
                            <td width='190' align='center'> Tgl upload</td>
                            <td width='136' align='center'>Aksi</td>
                        </tr>";
      while($array=mysqli_fetch_array($tampil))
      {
        $counter = 1;
        if ($counter % 2 == 0)    
            $warna = $genap;
          else 
            $warna = $ganjil;
        echo "
                <tr bgcolor=".$warna." onclick='hrefBerita(".$array['id_berita'].")'>
                    <td align='center'>".$no."</td>
                    <td width= '142' align='center'> 
                        <img src= '".$array['gambar']."' width= 100%/> 
                    </td>
                    <td width='136' align= 'center'>".$array[ 'judul']."</td>
                    <td width='136' align='center'> ".$array ['tgl_upload']."</td>
                    <td width—'138' align='center'> 
                        <a href='show.php?id=".$array['id_berita']."'>
                            <img src='gambar/search.png'/>
                        </a> 
                    </td>
                </tr>
            </div>
            </div>
            </div>
        </div>
    </div>";
        $no++;
        $counter++;
      }
    }
?>