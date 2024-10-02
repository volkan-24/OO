<?php
// Oturumu başlat
session_start();

// Oturum değişkenlerini boşalt
$_SESSION = array();

// Oturum çerezlerini sıfırla
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Oturumu sonlandır
session_destroy();

// Çıkış yapıldıktan sonra ana sayfaya yönlendirme
header("location: giris.html");
exit;
?>
