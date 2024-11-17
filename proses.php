<?php
    include 'koneksi.php';
    if (isset($_POST['submit'])) { 
        
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']); 
        $message = mysqli_real_escape_string($conn, $_POST['message']); 

        $query = "INSERT INTO form (id_developer,name, email, message, created_at)
        VALUES ('1','$name', '$email', '$message', CURRENT_TIMESTAMP)";

        if (mysqli_query($conn, $query)) {
            header('Location: index.php?status=success'); 
            exit();
        } else {
            echo "error: " . mysqli_error($conn);    
        }
        mysqli_close($conn);
    }
?>