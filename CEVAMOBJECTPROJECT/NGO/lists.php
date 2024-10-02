<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Donation History</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Dynamic Donation History</h1>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Donation Type</th>
                <th>Amount</th>
                <th>Project/Area</th>
                <th>Status</th>
                <th>Shipping Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Veritabanından bağış verilerini almak için bir sorgu yapın
            // Bu örnekte sabit bir dizi kullanılmıştır
            $donations = array(
                array("2024-05-25", "Cash", "$100", "Education Project", "Approved", "N/A"),
                array("2024-05-20", "Food", "50 kg", "Food Distribution", "Pending", "Not Shipped"),
                array("2024-05-18", "Clothing", "3 bags", "Community Outreach", "Approved", "Ship by Donor"),
                array("2024-05-15", "Furniture", "1 set", "Home Renovation", "Delivered", "N/A"),
                array("2024-05-10", "Cash", "$50", "Healthcare Project", "Approved", "N/A")
            );

            // Her bir bağış için bir tablo satırı oluşturun
            foreach ($donations as $donation) {
                echo "<tr>";
                foreach ($donation as $data) {
                    echo "<td>$data</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
