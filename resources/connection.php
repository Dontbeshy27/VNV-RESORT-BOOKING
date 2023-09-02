<?php

/* 
Create config.php file and add the configuration code in it
<?php
$db['host'] = "localhost"; // Host name
$db['user'] = "root"; // Mysql username
$db['pass'] = "YourPassword"; // Mysql password
$db['name'] = "YourDBname"; // Database name
?>
*/
// Include configuration


include('connection.php');

// Create connection
$conn = mysqli_connect('localhost', 'root', 'root', 'vnv-resort-booking');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

// Process form submission
if (isset($_POST['submit'])) {

    // Get form data
    $fullName = htmlspecialchars($_POST['fullName']);
    $contact_number = htmlspecialchars($_POST['contact_number']);
    $email = htmlspecialchars($_POST['email']);
    $gender = htmlspecialchars($_POST['gender']);
    $checkInDate = date('Y-m-d', strtotime($_POST['checkInDate']));
    $checkOutDate = date('Y-m-d', strtotime($_POST['checkOutDate']));

    // Prepare the SQL statement
    $stmt = mysqli_prepare($conn, "INSERT INTO `bookings` (`fullName`, `phone_number`, `email`, `gender`, `checkInDate`, `checkOutDate`) VALUES (?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'ssssss', $name, $contact_number, $email, $gender, $checkInDate,$checkOutDate);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        header("Location: booking.blade.php");
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close MySQL connection
mysqli_close($conn);

?>

