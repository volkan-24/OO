<?php
// Veritabanı bağlantı bilgileri
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ngo";

// Bağlantıyı oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Bağlantı başarısız: " . $conn->connect_error);
}

// Formdan gelen verileri alma
$name = $_POST['name'];
$email = $_POST['email'];
$profession = $_POST['profession'];
$region = $_POST['region'];
$availability = $_POST['availability'];

// SQL sorgusu oluşturma
$sql = "INSERT INTO volunteer_registration (name, email, profession, region, availability) VALUES ('$name', '$email', '$profession', '$region', '$availability')";

// Sorguyu çalıştırma
if ($conn->query($sql) === TRUE) {
    echo "Kayıt başarıyla eklendi";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

// Bağlantıyı kapatma
$conn->close();
?>
