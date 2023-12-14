<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "adminpanel";
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if($conn->connect_error){
        die("connection failed: ".$conn->connect_error);
    }
    $query = "SELECT *FROM login WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);
    if($result->num_rows == 1){
        header("Location: admin_welcome.html");
exit();
    }
    else {
exit();
 }
//  $conn->close();
  }
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/admin_login.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
            <h1>login</h1>
            <div class="input-box">
                <input type="text" name="username" placeholder="username" required><i class="fa-solid fa-user-tie"></i>
                        </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="password" required><i class="fa-solid fa-lock"></i>
                        </div>
                        <input type="submit" name="save" value="login" class="log-btn">
        </form>
    </div>
</body>
</html>