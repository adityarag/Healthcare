<?php
// Database connection configuration
$servername = "localhost"; // Assuming MySQL server is running on localhost
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "healthcare"; // Name of your MySQL database

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define arrays of sample data

    // SQL query to insert data
    $sql = "INSERT INTO appointments (name, email, phone, date, department, doctor, message) 
            VALUES ('$_POST[name]', '$_POST[email]', '$_POST[phone]', '$_POST[date]', '$_POST[department]', '$_POST[doctor]', '$_POST[message]')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully<br>";
    } else {
        echo "Error inserting record: " . $conn->error . "<br>";
    }

// Close the connection
$conn->close();
?>
