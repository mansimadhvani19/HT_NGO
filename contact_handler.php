<?php
    require_once "config.php";


    $conn = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
    
    if(!$conn){
        die("Connection to the database failed die to ". mysqli_connect_error());
    }
//     $Name = $conn->real_escape_string($_POST['name']);
//     $Email_Id = $conn->real_escape_string($_POST['email']);
//     $phone = $conn->real_escape_string($_POST['phone']);
//     $Subject = $conn->real_escape_string($_POST['subject']);
//     $Message = $conn->real_escape_string($_POST['message']);

// $query = "INSERT into ht_ngo.contact(name,email,phone,subject,message) VALUES('$Name','$Email_Id','$phone','$Subject','$Message')";
// $success = $conn->query($query);

// if (!$success){
//     echo "unsuccessful";
//   die("Couldnt enter data: ".$conn->error);
// }
// else{

//     header("location: index-2.php");
// }

// $conn->close();
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL query to insert form data into the database
    $sql = "INSERT INTO contact (name, email, phone, subject, message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        header("location: index-2.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
// Close the database connection
$conn->close();

?>
