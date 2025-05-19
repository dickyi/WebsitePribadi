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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

<!-- Bagian Form terpusat di tengah (100vh) -->
<div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
  <div class="text-center">
    <h1 class="display-3 mb-4">Form</h1>
    <figure>
      <blockquote class="blockquote">
      <p>Form adalah elemen HTML untuk mengumpulkan input dari pengguna, seperti teks, pilihan, dan file, untuk diproses lebih lanjut.</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        Modul Pemograman  <cite title="Source Title">Web I</cite>
      </figcaption>
    </figure>
  </div>
</div>



<div class="container mb-3">
  <h2 class="text-left my-2">Tugas Praktikum</h2>
</div>

<div class="container mb-5">
  <div class="row text-center">


<!-- Card Kolom Tugas Praktikum 1-->
<div class="col-md-4 mb-4">
  <div class="card" style="width: 100%;">
    <!-- Link untuk memunculkan carousel saat gambar diklik -->
    <a href="#carouselModal1" data-bs-toggle="modal" data-bs-target="#carouselModal1">
      <img src="img/ssFormLogin1.png" class="card-img-top" alt="Image" style="height: 200px; object-fit: cover; cursor: pointer;">
    </a>
    <div class="card-body">
      <h5 class="card-title">Tugas Praktikum 1</h5>
      <p class="card-text">Form Login</p>
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal4">Go somewhere</button>
    </div>
  </div>
</div>

<!-- Modal Carousel Tugas Praktikum 1 -->
<div class="modal fade" id="carouselModal1" tabindex="-1" aria-labelledby="carouselModal1Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Mengubah ukuran modal menjadi lebih besar -->
    <div class="modal-content">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button> <!-- Tombol untuk slide 4 -->
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/ssFormLogin1.png" class="d-block w-100" alt="Image 1" style="height: 600px; object-fit: contain;"> <!-- Memperbesar gambar -->
          </div>
          <div class="carousel-item">
            <img src="img/ssFormLogin2.png" class="d-block w-100" alt="Image 2" style="height: 600px; object-fit: contain;">
          </div>
          <div class="carousel-item">
            <img src="img/ssFormLogin3.png" class="d-block w-100" alt="Image 3" style="height: 600px; object-fit: contain;">
          </div>
          <div class="carousel-item">
            <img src="img/ssFormLogin4.png" class="d-block w-100" alt="Image 4" style="height: 600px; object-fit: contain;"> <!-- Gambar ke-4 -->
          </div>
        </div>
        <!-- Tombol Navigasi yang Bisa Diklik -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>


<!-- Card Kolom Tugas Praktikum 2 -->
<div class="col-md-4 mb-4">
  <div class="card" style="width: 100%;">
    <!-- Link untuk memunculkan carousel saat gambar diklik -->
    <a href="#carouselModal2" data-bs-toggle="modal" data-bs-target="#carouselModal2">
      <img src="img/ssFormRegister1.png" class="card-img-top" alt="Image" style="height: 200px; object-fit: cover; cursor: pointer;">
    </a>
    <div class="card-body">
      <h5 class="card-title">Tugas Praktikum 2</h5>
      <p class="card-text">Form Register</p>
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal5">Go somewhere</button>
    </div>
  </div>
</div>

<!-- Modal Carousel Tugas Praktikum 2 -->
<div class="modal fade" id="carouselModal2" tabindex="-1" aria-labelledby="carouselModal2Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Mengubah ukuran modal menjadi lebih besar -->
    <div class="modal-content">
      <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/ssFormRegister1.png" class="d-block w-100" alt="Image 1" style="height: 600px; object-fit: contain;"> <!-- Memperbesar gambar -->
          </div>
          <div class="carousel-item">
            <img src="img/ssFormRegister2.png" class="d-block w-100" alt="Image 2" style="height: 600px; object-fit: contain;">
          </div>
        </div>
        <!-- Tombol Navigasi yang Bisa Diklik -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>
</div>





<!-- Modal Tugas Praktikum 1 -->
<div class="modal fade" id="myModal4" tabindex="-1" aria-labelledby="myModalLabel4" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="myModalLabel4">Tugas Praktikum 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="padding-top: 0;">
      <div class="px-3 pt-3" style="text-align: center;">
  <strong>Form Input Data</strong><br />
</div>
        
        <form name="form_checkbox" id="form_checkbox" method="POST" enctype="multipart/form-data">
          <table class="table">
            <tr>
              <td><label for="name">Nama:</label></td>
              <td><input type="text" name="name" id="name" class="form-control" required></td>
            </tr>
            <tr>
              <td><label for="gender">Jenis Kelamin:</label></td>
              <td>
                <input type="radio" name="gender" value="Pria" required> Pria<br>
                <input type="radio" name="gender" value="Wanita" required> Wanita
              </td>
            </tr>
            <tr>
              <td><label for="job">Pilih Pekerjaan:</label></td>
              <td>
                <select name="job" id="job" class="form-control" required>
                  <option value="">Pilih Pekerjaan</option>
                  <option value="Programmer">Programmer</option>
                  <option value="Designer">Designer</option>
                  <option value="Marketing">Marketing</option>
                  <option value="Manager">Manager</option>
                  <option value="Dokter">Dokter</option>
                  <option value="Guru">Guru</option>
                  <option value="Lainnya">Lainnya</option>
                </select>
              </td>
            </tr>
            <tr>
              <td><label>Pilih Game yang disukai:</label></td>
              <td>
                <input type="checkbox" name="game1" value="Dota 2"> Dota 2<br>
                <input type="checkbox" name="game2" value="Mobile Legend"> Mobile Legend<br>
                <input type="checkbox" name="game3" value="Counter Strike"> Counter Strike<br>
                <input type="checkbox" name="game4" value="Tidak Menyukai Game"> Tidak ada
              </td>
            </tr>
            <tr>
              <td><label for="file">Pilih File:</label></td>
              <td><input type="file" name="file" id="file" class="form-control"></td>
            </tr>
            <tr>
              <td><label for="address">Alamat:</label></td>
              <td><textarea name="address" id="address" rows="4" cols="50" class="form-control"></textarea></td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" name="Pilih" value="Submit" class="btn btn-primary"></td>
            </tr>
          </table>
        </form>
        
        <div id="form-result" style="display:none;">
          <h3>Form Input Data yang Dikirimkan:</h3>
          <div><strong>Nama Anda:</strong> <span id="result-name"></span></div><br>
         
          <div><strong>Jenis Kelamin:</strong> <span id="result-gender"></span></div><br>
          <div><strong>Pekerjaan:</strong> <span id="result-job"></span></div><br>
          <div><strong>Hobi Anda Adalah:</strong> <span id="result-games"></span></div><br>
           <div><strong>Alamat Anda:</strong> <span id="result-address"></span></div><br>
          <div><strong>File yang Diupload:</strong> <span id="result-file"></span></div><br>
          
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="submitForm()">Understood</button>
        <!-- Reset Button with Icon -->
        <button type="button" class="btn btn-warning" onclick="resetForm()">
          <i class="fa fa-refresh"></i> 
        </button>
      </div>
    </div>
  </div>
</div>

<script>
document.getElementById('form_checkbox').addEventListener('submit', function(event) {
  event.preventDefault(); 
  
  let name = document.getElementById('name').value;
  let address = document.getElementById('address').value;
  let gender = document.querySelector('input[name="gender"]:checked')?.value;
  let job = document.getElementById('job').value;
  let games = [];
  if (document.querySelector('input[name="game1"]:checked')) games.push("Dota 2");
  if (document.querySelector('input[name="game2"]:checked')) games.push("Mobile Legend");
  if (document.querySelector('input[name="game3"]:checked')) games.push("Counter Strike");
  if (document.querySelector('input[name="game4"]:checked')) games.push("Tidak Menyukai Game");

  document.getElementById('result-name').textContent = name;
  document.getElementById('result-address').textContent = address;
  document.getElementById('result-gender').textContent = gender ? gender : 'Not Selected';
  document.getElementById('result-job').textContent = job;
  document.getElementById('result-games').textContent = games.length > 0 ? games.join(', ') : 'No games selected';
  
  let fileInput = document.getElementById('file');
  let fileReader = new FileReader();
  if (fileInput.files.length > 0) {
    document.getElementById('result-file').textContent = fileInput.files[0].name;
    
    fileReader.onload = function(e) {
      let imagePreview = document.createElement('img');
      imagePreview.src = e.target.result;
      imagePreview.style.maxWidth = '100%';
      imagePreview.style.height = 'auto';
      document.getElementById('form-result').appendChild(imagePreview);
    }
    fileReader.readAsDataURL(fileInput.files[0]); 
  } else {
    document.getElementById('result-file').textContent = 'No file uploaded';
  }

  document.getElementById('form-result').style.display = 'block';
});

function resetForm() {
  document.getElementById('form_checkbox').reset(); 
  document.getElementById('form-result').style.display = 'none'; 

  let imagePreview = document.querySelector('#form-result img');
  if (imagePreview) {
    imagePreview.remove();
  }
}

function submitForm() {
  alert('Form has been submitted!');
}
</script>


















<!-- Modal Tugas 2 -->
<div class="modal fade" id="myModal5" tabindex="-1" aria-labelledby="myModalLabel5" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="myModalLabel5">Tugas Login dan Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body p-0">
        <div class="px-3 pt-3">
          <strong>Soal Tugas:</strong><br />
          <p>1. Buatlah form login dan register dengan menggunakan form input yang telah anda pelajari pada modul 7</p>
          <p>2. Laporan dikumpulkan berupa screenshot kode program dan hasilnya.</p>
          <p>3. Dikumpulkan dengan format "Tugas7_nama(3 digit nim terakhir).pdf"</p>
        </div>
        
        <div class="px-3 pt-3">
          <strong>PHP Code:</strong><br />
          <pre class="mx-3 bg-light rounded-2 p-3" style="font-family: monospace;">
          <?php

          $users = [
            ['username' => 'user1', 'password' => 'pass1'],
            ['username' => 'user2', 'password' => 'pass2']
          ];

          function login($username, $password) {
              global $users;
              foreach ($users as $user) {
                  if ($user['username'] === $username && $user['password'] === $password) {
                      return true;  
                  }
              }
              return false;  
          }

          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              $username = $_POST['username'];
              $password = $_POST['password'];
         
              echo "User Registered: " . htmlspecialchars($username);
          }
          ?>
          </pre>
        </div>

      </div>
      
      <div class="modal-footer">
        <a href="login.php" class="btn btn-primary">Go to Login</a>
        <a href="register.php" class="btn btn-success">Go to Register</a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 





<div class="container mb-3" style="margin-top: 40px;">
  <h2 class="text-left my-2">PDF Tugas</h2>
</div>

<div class="container mb-20"> <!-- Mengurangi margin-bottom agar lebih dekat ke footer -->
  <div class="row text-left">

    <!-- Button trigger modal - Display PDF for Tugas -->
    <div class="mb-3">
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#pdfTugas">
           Tugas 7 - Form Login Dan Register
        </button>
    </div>
  </div>
</div>


<!-- Modal for Displaying PDF - Tugas Praktikum 4 -->
<div class="modal fade" id="pdfTugas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tugas 7 - Form Login Dan Register</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Displaying PDF in iframe -->
                <iframe src="img/Tugas7_DickyIrawan_054.pdf" width="100%" height="500px" frameborder="0"></iframe>
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
</div>


<?php include('footer.php'); ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</html>

