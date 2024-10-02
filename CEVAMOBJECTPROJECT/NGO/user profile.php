<?php
// Kullanıcı "User Profile" butonuna tıkladığında
if(isset($_POST['userProfileButton'])){
    // Kullanıcıyı "user_profile.html" sayfasına yönlendir
    header('Location: user_profile.html');
    exit(); // Yönlendirme yapıldıktan sonra kodun çalışmasını sonlandır
}
?>
