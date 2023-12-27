<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <?php
         require "../connect_db.php";
        
        if (isset($_POST["submit"])) {
           
            $email_user = $_POST["email"];
            $password = $_POST["password"];

            $check_account = "SELECT id, email, mat_khau, ten_nguoidung, vai_tro FROM taikhoan WHERE email='$email_user' && mat_khau ='$password' ";
            $result = $conn->query($check_account);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  
                    $_SESSION["user_name"] = $row["ten_nguoidung"];
                 
                    $_SESSION["user_id"] = $row["id"];
                    $_SESSION["role"] = $row["vai_tro"];
                    header('Location: trangchu.php');
                    
                 
                }
            } else {
                echo "Nhập sai email hoặc mật khẩu";
            }
        }
    ?>
</body>
</html>
