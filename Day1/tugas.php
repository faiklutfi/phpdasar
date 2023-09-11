<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
    <!-- input nama --> 
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
  Nama: <input type="text" name="fname"> 
  <br> 
  Umur: <input type="text" name="umur"> 
  <br> 
  Gender:
<input type="radio" name="gender" value="laki laki">laki laki
<input type="radio" name="gender" value="perempuan">perempuan
<br>
<input type="checkbox" name="makanan[]" value="rendang">rendang 
<input type="checkbox" name="makanan[]" value="sayur sop">sayur sop
<input type="checkbox" name="makanan[]" value="ayam">ayam
<br>
  <input type="submit"> 
</form> 
 
<br> 
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Mengambil nilai dari input field 
    $name = $_POST['fname']; 
    $umur = $_POST['umur']; 
    $gender = $_POST['gender']; 
    $makanan = $_POST['makanan'];
     
    // Validasi data 
    if (empty($name) && empty($umur)) {
        echo "Nama dan umur kosong";
    } else {
        // Menampilkan hasil
        if (!empty($name)) {
            echo "Nama saya" . " " . $name;
        }

        if (!empty($umur)) {
            echo " dan umur ku" . " " . $umur;
        }
        if (!empty($gender)) {
            echo "saya seorang" . " " . $gender;
        }

        if (!empty($makanan)) {
            echo "dan makanan kesukaan saya adalah " . implode(", ", $makanan); // Add a comma after the implode function
        } else {
            echo "Maaf anda belum memilih makanan"; // Add a semicolon here
        }
    }
} 
  ?> 
</body>
</html>
