<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
     <style>
      body {
        background-image: url('https://megagada.co.id/wp-content/uploads/2019/05/wallpaper-pemandangan-bintang-malam-gambar-pemandangan-alam-salju-musim-dingin-langit-of-wallpaper-pemandangan-bintang-malam.jpg');
      }
     </style>
</head>
<body class="container py-5">
<div class="card w-50 justify-content-center mx-auto ">
<div class="header">
    <h2 class="text-center pt-3 text-primary ">REGISTER PAGE</h2>
</div>
    <div class="card-body">
        <form action="connect_register.php" method="post">
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputUsername" class="form-label">username </label>
    <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp" name="username">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div class= "text-center pb-3">
  <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br> 
        <div>
        <p class="text-center">sudah punya akun? <a href="login.php">login akun</a></p>
        </div>
</body>      
</html>
