<?php
// Mulai session untuk memeriksa status login
session_start();

// Cek apakah session login sudah ada
if (!isset($_SESSION['login']) || $_SESSION['login'] !== 1) {
    // Jika pengguna belum login, arahkan ke halaman login
    header("Location: login.php");
    exit();
}

// Sertakan file header setelah memulai sesi
include('header.php');
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/stylePortfolioArray.css">
<!-- Bagian Array terpusat di tengah (100vh) -->
<div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
  <div class="text-center">
    <h1 class="display-3 mb-4">Array</h1>
    <figure>
      <blockquote class="blockquote">
        <p>Array merupakan suatu tipe data yang terstruktur dan dapat digunakan untuk menyimpan data yang
        memiliki tipe data yang sama.</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        Modul Pemograman  <cite title="Source Title">Web I</cite>
      </figcaption>
    </figure>
  </div>
</div>

<!-- Header Pembatas Kegiatan Praktikum -->
<div class="container mb-3">
  <h2 class="text-left my-2">Kegiatan Praktikum</h2>
</div>

<!-- Row kolom untuk Kegiatan Praktikum -->
<div class="container mb-5">
  <div class="row text-center">

    <!-- Card Kolom Kegiatan Praktikum 1 -->
    <div class="col-md-4 mb-4">
      <div class="card" style="width: 100%;">
        <a href="img/ssArray1.png">
          <img src="img/ssArray1.png" class="card-img-top" alt="Image" style="height: 200px; object-fit: cover;">
        </a>
        <div class="card-body">
          <h5 class="card-title">Kegiatan Praktikum 1</h5>
          <p class="card-text">$kelompok1 = array("Andi", "Budi", "Chika", "David", "Erna");<br>
          echo "Nama Kelompok 1 :<br />";</p>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal1">Go somewhere</button>
        </div>
      </div>
    </div>

    <!-- Card Kolom Kegiatan Praktikum 2 -->
    <div class="col-md-4 mb-4">
      <div class="card" style="width: 100%;">
        <a href="img/ssArray2.png">
          <img src="img/ssArray2.png" class="card-img-top" alt="Image" style="height: 200px; object-fit: cover;">
        </a>
        <div class="card-body">
          <h5 class="card-title">Kegiatan Praktikum 2</h5>
          <p class="card-text">$array1 = array("Arman", "Bayu", "Feri");<br>
          echo "Array awal ialah:<br />";<br>
          foreach ($array1 as $key => $value)</p>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal2">Go somewhere</button>
        </div>
      </div>
    </div>

    <!--  Card Kolom Kegiatan Praktikum 3 -->
    <div class="col-md-4 mb-4">
      <div class="card" style="width: 100%;">
        <a href="img/ssArray33.png">
          <img src="img/ssArray33.png" class="card-img-top" alt="Image" style="height: 200px; object-fit: cover;">
        </a>
        <div class="card-body">
          <h5 class="card-title">Kegiatan Praktikum 3</h5>
          <p class="card-text">$pegawai = array("lina", "arni", "jona", "punjabi", "marcus", "marlin");<br>
          echo "<strong>Sebelum diurutkan</strong><br />";<br></p>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal3">Go somewhere</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container mb-3">
  <h2 class="text-left my-2">Tugas Praktikum</h2>
</div>

<div class="container mb-5">
  <div class="row text-center">

    <!--  Card Kolom Tugas Praktikum 1-->
    <div class="col-md-4 mb-4">
      <div class="card" style="width: 100%;">
        <a href="img/ssArray4.png">
          <img src="img/ssArray4.png" class="card-img-top" alt="Image" style="height: 200px; object-fit: cover;">
        </a>
        <div class="card-body">
          <h5 class="card-title">Tugas Praktikum 1</h5>
          <p class="card-text">if (!function_exists('dump_array')) {<br>
            function dump_array($title, $arr) {<br />";</p>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal4">Go somewhere</button>
        </div>
      </div>
    </div>

    <!-- Card Kolom Tugas Praktikum 2 -->
    <div class="col-md-4 mb-4">
      <div class="card" style="width: 100%;">
        <a href="img/ssArray5.png">
          <img src="img/ssArray5.png" class="card-img-top" alt="Image" style="height: 200px; object-fit: cover;">
        </a>
        <div class="card-body">
          <h5 class="card-title">Tugas Praktikum 2</h5>
          <p class="card-text">$gabung = array_merge($buah, $buah2);<br>
          array_push($buah, "Mangga");<br />";</p>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal5">Go somewhere</button>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Modal Kegiatan Praktikum 1-->
<div class="modal fade" id="myModal1" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel1">Kegiatan Praktikum 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="padding-top: 0;">
        <?php
          echo "<strong>PHP Code:</strong><br />";
          echo "<pre style='margin-top: 0; padding-top: 0;'>";
          echo htmlspecialchars('<?php
$kelompok1 = array("Andi", "Budi", "Chika", "David", "Erna");
echo "Nama Kelompok 1 :<br />";
for ($i = 0; $i <= 4; $i++) {
    echo " + " . $kelompok1[$i] . "<br />";
}
echo "<br /><br />";
$kelompok2[] = "Fera";
$kelompok2[] = "Gani";
$kelompok2[] = "Hery";
$kelompok2[] = "Intan";
$kelompok2[] = "Jaka";
echo "Nama Kelompok 2 :<br />";
for ($i = 0; $i <= 4; $i++) {
    echo " + " . $kelompok2[$i] . "<br />";
}
?>');
          echo "</pre>";

          echo "<strong>Hasil Code:</strong><br />";
          $kelompok1 = array("Andi", "Budi", "Chika", "David", "Erna");
          echo "Nama Kelompok 1 :<br />";
          for ($i = 0; $i <= 4; $i++) {
              echo " + " . $kelompok1[$i] . "<br />";
          }
          echo "<br /><br />";

          $kelompok2[] = "Fera";
          $kelompok2[] = "Gani";
          $kelompok2[] = "Hery";
          $kelompok2[] = "Intan";
          $kelompok2[] = "Jaka";
          echo "Nama Kelompok 2 :<br />";
          for ($i = 0; $i <= 4; $i++) {
              echo " + " . $kelompok2[$i] . "<br />";
          }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal Kegiatan Praktikum 2 -->
<div class="modal fade" id="myModal2" tabindex="-1" aria-labelledby="myModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel2">Kegiatan Praktikum 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="padding-top: 0;">
        <?php
          echo "<strong>PHP Code:</strong><br />";
          echo "<pre style='margin-top: 0; padding-top: 0;'>";
          echo htmlspecialchars('<?php
$array1 = array("Arman", "Bayu", "Feri");
echo "Array awal ialah:<br />";
foreach ($array1 as $key => $value) {
    echo "Data ke-" . $key . " : " . $value . "<br />";
}

array_push($array1, "Herni", "Gita", "Dewi");
echo "<br/>Setelah ditambahkan \'Herni, Gita & Dewi\' menggunakan fungsi array_push():<br/>";
foreach ($array1 as $key => $value) {
    echo "Data ke-" . $key . " : " . $value . "<br />";
}

array_shift($array1);
echo "<br/>Setelah bagian awal array dihapus menggunakan fungsi array_shift():<br/>";
foreach ($array1 as $key => $value) {
    echo "Data ke-" . $key . " : " . $value . "<br />";
}

sort($array1);
echo "<br/>Dan setelah isi array diurutkan menggunakan fungsi sort():<br/>";
foreach ($array1 as $key => $value) {
    echo "Data ke-" . $key . " : " . $value . "<br />";
}
?>');
          echo "</pre>";

          echo "<strong>Hasil Code:</strong><br />";
          $array1 = array("Arman", "Bayu", "Feri");
          echo "Array awal ialah:<br />";
          foreach ($array1 as $key => $value) {
              echo "Data ke-" . $key . " : " . $value . "<br />";
          }

          array_push($array1, "Herni", "Gita", "Dewi");
          echo "<br/>Setelah ditambahkan 'Herni, Gita & Dewi' menggunakan fungsi array_push():<br/>";
          foreach ($array1 as $key => $value) {
              echo "Data ke-" . $key . " : " . $value . "<br />";
          }

          array_shift($array1);
          echo "<br/>Setelah bagian awal array dihapus menggunakan fungsi array_shift():<br/>";
          foreach ($array1 as $key => $value) {
              echo "Data ke-" . $key . " : " . $value . "<br />";
          }

          sort($array1);
          echo "<br/>Dan setelah isi array diurutkan menggunakan fungsi sort():<br/>";
          foreach ($array1 as $key => $value) {
              echo "Data ke-" . $key . " : " . $value . "<br />";
          }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Kegiatan Praktikum 3 -->
<div class="modal fade" id="myModal3" tabindex="-1" aria-labelledby="myModalLabel3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg"> 
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="myModalLabel3">Kegiatan Praktikum 3</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="padding-top: 0;">
        <?php
          echo "<strong>PHP Code:</strong><br />";
          echo "<pre style='margin-top: 0; padding-top: 0;'>";
          echo htmlspecialchars('<?php
$pegawai = array("lina", "arni", "jona", "punjabi", "marcus", "marlin");

echo "<strong>Sebelum diurutkan</strong><br />";
foreach ($pegawai as $data => $nama) {
    echo "$data: $nama<br />";
}

sort($pegawai);

echo "<strong>Setelah diurutkan</strong><br />";
foreach ($pegawai as $data => $nama) {
    echo "$data: $nama<br />";
}
?>');
          echo "</pre>";
          
          echo "<strong>Hasil Code:</strong><br />";
          $pegawai = array("lina", "arni", "jona", "punjabi", "marcus", "marlin");

          echo "<strong>Sebelum diurutkan</strong><br />";
          foreach ($pegawai as $data => $nama) {
              echo "$data: $nama<br />";
          }

          sort($pegawai);

          echo "<strong>Setelah diurutkan</strong><br />";
          foreach ($pegawai as $data => $nama) {
              echo "$data: $nama<br />";
          }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>







<!-- Modal Tugas 1 -->
<div class="modal fade" id="myModal4" tabindex="-1" aria-labelledby="myModalLabel4" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="myModalLabel4">Tugas Praktikum 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body p-0">
        <div class="px-3 pt-3">
          <strong>Soal Tugas:</strong><br />
          <p>1. Buatlah array asosiatif, kemudian lakukan semua fungsi pengurutan.</p>
        </div>
        
        <?php
          $buah = [
            "d" => "Durian",
            "a" => "Apel",
            "c" => "Ceri",
            "b" => "Bakso",
            "e" => "Elderberry"
          ];

          function dump_array($title, $arr) {
            echo "<h6 class='mt-3'>$title</h6><pre class='mx-3'>";
            print_r($arr);
            echo "</pre>";
          }

          echo "<div class='px-3 pt-3'><strong>PHP Code:</strong></div>";
          echo "<pre class='mx-3 bg-light rounded-2 p-3' style='font-family: monospace;'>";
          echo htmlspecialchars('
<?php
$buah = [
  "d" => "Durian",
  "a" => "Apel",
  "c" => "Ceri",
  "b" => "Bakso",
  "e" => "Elderberry"
];

function dump_array($title, $arr) {
  echo "<h6>$title</h6><pre>";
  print_r($arr);
  echo "</pre>";
}

dump_array("Array Asli", $buah);

$copy = $buah;
sort($copy);
dump_array("sort()", $copy);

$copy = $buah;
rsort($copy);
dump_array("rsort()", $copy);

$copy = $buah;
asort($copy);
dump_array("asort()", $copy);

$copy = $buah;
arsort($copy);
dump_array("arsort()", $copy);

$copy = $buah;
ksort($copy);
dump_array("ksort()", $copy);

$copy = $buah;
krsort($copy);
dump_array("krsort()", $copy);
?>');
          echo "</pre>";

          echo "<div class='px-3'><strong>Hasil Code:</strong></div>";
          
          dump_array("Array Asli", $buah);

          $copy = $buah;
          sort($copy);
          dump_array("sort()", $copy);

          $copy = $buah;
          rsort($copy);
          dump_array("rsort()", $copy);

          $copy = $buah;
          asort($copy);
          dump_array("asort()", $copy);

          $copy = $buah;
          arsort($copy);
          dump_array("arsort()", $copy);

          $copy = $buah;
          ksort($copy);
          dump_array("ksort()", $copy);

          $copy = $buah;
          krsort($copy);
          dump_array("krsort()", $copy);
        ?>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div> 




<!-- Modal Tugas Praktikum 2 -->
<div class="modal fade" id="myModal5" tabindex="-1" aria-labelledby="myModalLabel5" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg"> 
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="myModalLabel5">Tugas Praktikum 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="padding-top: 0;">
        <div class="px-3 pt-3">
          <strong>Soal Tugas:</strong><br />
          <p>2. Cari dan gunakan 5 fungsi array (selain yang di atas) dan implementasikan 5 fungsi array tersebut ke array yang telah anda buat!</p>
        </div>
        
        <?php
          echo "<strong>PHP Code:</strong><br />";
          echo "<pre style='margin-top: 0; padding-top: 0;'>";
          echo htmlspecialchars('<?php
if (!function_exists(\'dump_array\')) {
    function dump_array($title, $arr) {
        echo "<h6><strong>$title</strong></h6>";
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
}

$buah = [
    "d" => "Durian",
    "a" => "Apel",
    "c" => "Ceri",
    "b" => "Bakso",
    "e" => "Elderberry"
];
dump_array("1. Array Asli", $buah);

$buah2 = [
    "f" => "Fig",
    "g" => "Grape"
];
$gabung = array_merge($buah, $buah2);
dump_array("2. array_merge() - Menggabungkan dua array", $gabung);

array_push($buah, "Mangga");
dump_array("3. array_push() - Menambahkan elemen", $buah);

$elemen_terakhir = array_pop($buah);
echo "<h6><strong>4. Elemen yang dihapus (array_pop):</strong> $elemen_terakhir</h6>";
dump_array("4. array_pop() - Menghapus elemen terakhir", $buah);

$cek_nilai = "Ceri";
$ada = in_array($cek_nilai, $buah) ? "Ada" : "Tidak ada";
echo "<h6><strong>5. Apakah \'$cek_nilai\' ada di dalam array?</strong> $ada</h6>";

$key_check = "a";
$key_ada = array_key_exists($key_check, $buah) ? "Ada" : "Tidak ada";
echo "<h6><strong>6. Apakah key \'$key_check\' ada di dalam array?</strong> $key_ada</h6>";
?>');
          echo "</pre>";

          $buah = [
              "d" => "Durian",
              "a" => "Apel",
              "c" => "Ceri",
              "b" => "Bakso",
              "e" => "Elderberry"
          ];

          echo "<strong>Hasil Code:</strong><br />";
          dump_array("1. Array Asli", $buah);

          $buah2 = [
              "f" => "Fig",
              "g" => "Grape"
          ];
          $gabung = array_merge($buah, $buah2);
          dump_array("2. array_merge() - Menggabungkan dua array", $gabung);

          array_push($buah, "Mangga");
          dump_array("3. array_push() - Menambahkan elemen", $buah);

          $elemen_terakhir = array_pop($buah);
          echo "<h6><strong>4. Elemen yang dihapus (array_pop):</strong> $elemen_terakhir</h6>";
          dump_array("4. array_pop() - Menghapus elemen terakhir", $buah);

          $cek_nilai = "Ceri";
          $ada = in_array($cek_nilai, $buah) ? "Ada" : "Tidak ada";
          echo "<h6><strong>5. Apakah '$cek_nilai' ada di dalam array?</strong> $ada</h6>";

          $key_check = "a";
          $key_ada = array_key_exists($key_check, $buah) ? "Ada" : "Tidak ada";
          echo "<h6><strong>6. Apakah key '$key_check' ada di dalam array?</strong> $key_ada</h6>";
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>


<div class="container mb-3">
  <h2 class="text-left my-2">PDF Tugas</h2>
</div>

<div class="container mb-5">
  <div class="row text-left">


<!-- Button trigger modal - Display PDF for Tugas -->
<div class="mb-3">
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#pdfTugas">
       Tugas 6 - Array
    </button>
</div>

<!-- Modal for Displaying PDF - Tugas Praktikum 4 -->
<div class="modal fade" id="pdfTugas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tugas 6 - Array</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Displaying PDF in iframe -->
                <iframe src="img/Tugas6_DickyIrawan_054.pdf" width="100%" height="500px" frameborder="0"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>







<?php include('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</html>
