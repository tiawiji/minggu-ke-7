<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Proses autentikasi username dan password bisa ditambahkan di sini

    $targetDirectory = "./gambar/"; // Folder untuk menyimpan file foto
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Periksa apakah file yang diunggah benar-benar file gambar
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile);
        echo "File " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " berhasil diunggah.";
    } else {
        echo "File bukan merupakan file gambar.";
    }
}
?>
