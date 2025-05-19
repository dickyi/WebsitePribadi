<?php
echo "<h2>Form Input Data yang Dikirimkan:</h2>";

echo "<div><strong>Nama Anda:</strong> <span>" . $_POST['name'] . "</span></div><br>";
echo "<div><strong>Alamat Anda:</strong> <span>" . nl2br($_POST['address']) . "</span></div><br>";

if (isset($_POST['gender'])) {
    echo "<div><strong>Jenis Kelamin:</strong> <span>" . $_POST['gender'] . "</span></div><br>";
}

if (isset($_POST['job'])) {
    echo "<div><strong>Pekerjaan:</strong> <span>" . $_POST['job'] . "</span></div><br>";
}

echo "<div><strong>Hobi Anda Adalah:</strong></div><br>";

$hobi_terpilih = false; 

if (isset($_POST['game1'])) {
    echo "<div><span>- " . $_POST['game1'] . "</span></div><br>";
    $hobi_terpilih = true;
}

if (isset($_POST['game2'])) {
    echo "<div><span>- " . $_POST['game2'] . "</span></div><br>";
    $hobi_terpilih = true;
}

if (isset($_POST['game3'])) {
    echo "<div><span>- " . $_POST['game3'] . "</span></div><br>";
    $hobi_terpilih = true;
}

if (isset($_POST['game4'])) {
    echo "<div><span>- " . $_POST['game4'] . "</span></div><br>";
    $hobi_terpilih = true;
}

if (!$hobi_terpilih) {
    echo "<div><span>- Tidak ada pilihan game yang dipilih.</span></div><br>";
}

// Menambahkan file upload
$dir_upload = "files/";
$uploadFile = $dir_upload . $_FILES['file']['name']; 


if (is_uploaded_file($_FILES['file']['tmp_name'])) {
    $kirim = move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile);
    if ($kirim) {
        echo "<div>File berhasil diupload ke server pada folder <b>$uploadFile</b></div><br>";

        echo "<h3>Detail File yang Diupload:</h3>";
        echo "<pre>";
        var_dump($_FILES['file']);
        echo "</pre>";
    } else {
        echo "<div><strong>File gagal diupload</strong></div><br>";
        echo "<div>Error: " . $_FILES['file']['error'] . "</div><br>";
    }
} else {
    echo "<div>File tidak diupload atau error dalam pengiriman file.</div><br>";
}
?>


<a href="form.html" style="
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-align: center;
    border-radius: 5px;
    text-decoration: none;
    font-size: 16px;
    margin-top: 20px;
    transition: background-color 0.3s ease;">
    Kembali
</a>
