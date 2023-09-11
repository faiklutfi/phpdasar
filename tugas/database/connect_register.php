<?php 
    $servername = "localhost:3306";
    $username_db = "root";
    $password_db = "";
    $database_name = "db_sekolah";

    $email = isset($_POST['email'])?$_POST['email']: '';
    $username = isset($_POST['username'])?$_POST['username']: '';
    $password = isset($_POST['password'])?$_POST['password']: '';
    
    $conn = new mysqli($servername, $username_db, $password_db, $database_name);

    if ($conn->connect_error) {
        die("Koneksi database gagal: " . $conn->connect_error );
    } else {
        $stmt = $conn->prepare("INSERT INTO admin (email, username, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $username, $password);

        if ($stmt->execute()) {
            echo "Registrasi berhasil";
        } else {
            echo "Gagal menambahkan data admin: " . $stmt->error;
        }
        $stmt->close();
        $conn->close();
    }
?>
