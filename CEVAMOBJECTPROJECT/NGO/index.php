<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO-AOMSYS</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('bagissss.jpg'); /* Arka plan resmi */
            background-size: 100% auto; /* Arka plan resmini yeniden boyutlandır */
            background-repeat: no-repeat; /* Arka plan resminin tekrar etmesini engelle */
            background-position: center center; /* Arka plan resmini ortala */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        body::after {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4); /* Koyu renk ekleyin, 0.5 opaklık */
            z-index: -1; /* Arkaplan resminin üzerine gelmesini sağlar */
        }
        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 1;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            background-color: #333;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            font-size: 36px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 40px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size: 18px;
            padding: 10px 20px;
            border: 2px solid #333;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #333;
            color: #fff;
        }

        .donate {
            background-color: rgba(255, 255, 255, 0.8); /* Light background for better readability */
            padding: 20px;
            border-radius: 10px;
        }

        .donate input[type="text"] {
            padding: 15px;
            border: 2px solid #000000;
            border-radius: 5px;
            font-size: 18px;
            margin-right: 20px;
        }

        .donate input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .donate input[type="submit"]:hover {
            background-color: #000;
        }
        
        @media screen and (max-width: 600px) {
            .container {
                padding: 10px;
            }
            h1 {
                font-size: 24px;
            }
            nav ul li a {
                font-size: 14px;
            }
            .donate input[type="text"] {
                font-size: 14px;
            }
            .donate input[type="submit"] {
                font-size: 14px;
            }
        }

        #footer {
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            text-align: center;
            padding: 10px 0;
            font-size: 12px;
            z-index: 999;
            margin-top: auto; /* Sayfanın alt kısmında kalmasını sağlar */
        }

        .social-icon {
            display: flex;
            justify-content: center;
            margin-bottom: 40px; /* Daha küçük margin */
        }

        .social-item {
            margin: 0 2px; /* Daha küçük margin */
        }

        .social-item img {
            width: 30px; /* Daha küçük ikon boyutu */
            height: 30px;
        }

        #footer {
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            text-align: center;
            padding: 10px 0;
            font-size: 10px;
            z-index: 999;
            margin-top: auto; /* Sayfanın alt kısmında kalmasını sağlar */
        }

        #footer .copyright {
            margin-top: 0px; /* Yeni margin */
        }

        #header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 20px 0;
            z-index: 9999;
        }

        #header h1 {
            margin-top: 0;
        }

        #navbar {
            display: flex;
            justify-content: center;
        }

        #navbar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #navbar ul li {
            margin: 0 15px;
        }

        #navbar ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            padding: 10px 20px;
            border: 2px solid #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        #navbar ul li a:hover {
            background-color: #fff;
            color: #333;
        }
        
    </style>
    <script>
        // Çıkış işlemi
        function logout() {
            // Çıkış mesajı göster
            document.getElementById("logout-message").style.display = "block";
            // 3 saniye sonra giriş sayfasına yönlendir
            setTimeout(function() {
                window.location.href = "giriş.html";
            }, 2000);
        }
    </script>
</head>
<body>
    <div id="header">
        <h1>WELCOME TO NGO-AOMSYS</h1>
        <!-- Navbar -->
        <nav id="navbar">
            <ul>
                <li><a href="giriş.html">Home</a></li> <!-- Home button directing to the main page -->
                <li><a href="about.html" target="_blank">About</a></li> <!-- Target özelliğiyle yeni sekmede açılması sağlandı -->
                <li><a href="donor_registration.html">Donor Registration</a></li>
                <li><a href="volunteer_registration.html">Volunteer Registration</a></li>
                <li><a href="indigent_registration.html">Indigent Registration</a></li>
                <li><a href="sifre.html" target="_blank">Admin</a></li> <!-- Target özelliğiyle yeni sekmede açılması sağlandı -->
               <!-- <li><a href="logout.html">Logout</a></li>  Logout button -->
                <li><a href="#" onclick="logout()">Logout</a></li> <!-- logout.html dosyasına gerek yok -->
            </ul>
        </nav>
        <!-- End Navbar -->
    </div>
    <div class="container">
        <!-- Content -->
        <div class="donate">
            <h2>Make a Donation</h2>
            <form action="donation.php" method="post">
                <input type="text" name="amount" placeholder="Enter amount...">
                <input type="submit" value="Donate Now">
                
            </form>
        </div>
        <!-- End Content -->
    </div>
    <!-- Footer -->
    <section id="footer">
        <div class="footer container">
            <!--<h2>Your Complete Web Solution</h2>-->
            <div class="social-icon">
                <div class="social-item">
                    <a href="#" title="Visit our Facebook page"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" alt="Facebook"></a>
                </div>
                <div class="social-item">
                    <a href="#" title="Check out our Instagram profile"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" alt="Instagram"></a>
                </div>
                <div class="social-item">
                    <a href="#" title="Chat with us on WhatsApp"><img src="https://img.icons8.com/bubbles/100/000000/whatsapp.png" alt="WhatsApp"></a>
                </div>
            </div>
            <p class="copyright">Copyright © 2024. All rights reserved</p>
        </div>
    </section>
    <!-- Çıkış mesajı -->
    
    \\<div id="logout-message" style="display: none;">
        Çıkış yapılıyor...
    </div>
    <!-- Logout butonu -->
    <button onclick="logout()">Çıkış Yapılıyor</button>


    <!-- End Footer -->
</body>

</html>

<?php 

    include("baglanti.php") ;

?>       