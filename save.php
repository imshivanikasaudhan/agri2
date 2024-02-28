<?php
include_once "dbcon.php";
// echo '<script>
// document.getElementById("loader").style.display = "block"; // Show the loader
// </script>';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate and sanitize input (implement as needed)
    // ...

    $sql = "INSERT INTO contacts (first_name, last_name, phone, email, message) VALUES ('$firstname','$lastname','$phone', '$email','$message')";

  

    if ($conn->query($sql) === TRUE) {
        echo '<script>
       
        window.location.href = "index.php";
     </script>';;
        exit();
    } else {
        echo '<script>
               
                alert("Error: ' . $conn->error . '");
             </script>';
    }
}

$conn->close(); // Close the connection in case there was no POST request

// Redirect only if there was no POST request
echo '<script>
      
        window.location.href = "index.php";
     </script>';
exit();
?>
