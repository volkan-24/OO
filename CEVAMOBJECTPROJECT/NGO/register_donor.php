<?php
// Formdan gelen verileri al
$name = $_POST['name'];
$email = $_POST['email'];
$donationType = $_POST['donationType'];
$amount = $_POST['amount'];

// Veritabanına bağlan
$servername = "localhost"; // Veritabanı sunucusunun adı
$username = "root"; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı parolası
$dbname = "ngo"; // Veritabanı adı

// Veritabanına bağlantı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Veritabanına ekleme işlemi için SQL sorgusu oluştur
$sql = "INSERT INTO `donor_registration` (name, email, donation_type, amount) VALUES ($name, $email, $donationType, $amount)";

// Prepared statement oluştur
$stmt = $conn->prepare($sql);

// Değişkenleri parametrelere bağla
$stmt->bind_param("sssi", $name, $email, $donationType, $amount);

// Sorguyu çalıştır ve sonucu kontrol et
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Veritabanı bağlantısını ve statement'ı kapat
$stmt->close();
$conn->close();
?>

<?php
// Formdan gelen verileri al
 $name = $_POST['name'];
 $email = $_POST['email'];
 $donationType = $_POST['donationType'];
 $amount = $_POST['amount'];

 // Veritabanına bağlan
 $servername = "localhost"; // Veritabanı sunucusunun adı
 $username = "root"; // Veritabanı kullanıcı adı
 $password = ""; // Veritabanı parolası
 $dbname = "ngo"; // Veritabanı adı

// // Veritabanına bağlantı oluştur
 $conn = new mysqli($servername, $username, $password, $dbname);
 dd($conn);
 // Bağlantıyı kontrol et
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

// // Veritabanına ekleme işlemi için SQL sorgusu oluştur
 $sql = "INSERT INTO donor registration (name, email, donation_type, amount) VALUES ('$name', '$email', '$donationType', '$amount')";

// // Sorguyu çalıştır ve sonucu kontrol et
 if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }

// // Veritabanı bağlantısını kapat
 $conn->close();
?>
