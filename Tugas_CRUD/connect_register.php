<?php 
$servername = "localhost"; 
$username_db = "root"; 
$password_db = ""; 
$dbname= "db_sekolah"; 
 
if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])) { 
    $email =isset($_POST['email']) ? $_POST['email']: ''; 
    $username =isset($_POST['username']) ? $_POST['username']: ''; 
    $password =isset($_POST['password']) ? $_POST['password']: ''; 
} 
 
$conn = new mysqli($servername, $username_db, $password_db, $dbname); 
 
if ($conn->connect_error) { 
    die("Koneksi database gagal: " . $conn ->connect_error); 
}else{ 
    $stmt = $conn->prepare("INSERT INTO admin(email, username, password) VALUES (?, ?, ?)"); 
    $stmt->bind_param("sss", $email, $username, $hashed_password); 
    $hashed_password = md5($password);  
    $stmt->execute(); 
    echo "Registrasi berhasil"; 
    header('location:login.php');
    $stmt->close(); 
    $conn->close(); 
 
} 
?>
