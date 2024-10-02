<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $monthlyIncome = $_POST['monthly_income'];
    $householdSize = $_POST['household_size'];
    $childrenNumber = $_POST['children_number'];
    $educationalStatus = $_POST['educational_status'];
    $employmentStatus = $_POST['employment_status'];
    $monthlyExpenditure = $_POST['monthly_expenditure'];
    $supportNeeded = $_POST['support_needed'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ngo";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO indigent_registration (monthly_income, household_size, children_number, educational_status, employment_status, monthly_expenditure, support_needed, email, phone, address, city, country)
    VALUES ('$monthlyIncome', '$householdSize', '$childrenNumber', '$educationalStatus', '$employmentStatus', '$monthlyExpenditure', '$supportNeeded', '$email', '$phone', '$address', '$city', '$country')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
