<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="trangchu.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" class="">
</head>
<body>
    <div class="container">
        <head>
            <div class="navbar">
                <img src="../image/logo.jpg" alt="" class="logo">
                <nav>
                    <ul>
                        <li><a href="">ABOUT</a></li>
                        <li><a href="">REGISTER</a></li>
                        <li><a href="">LOGIN</a></li>
                        <li><a href="">HELP</a></li>
                    </ul>
                </nav>
                <nav>
                    <?php
                        include "Search_tour.php";
                    ?>
                </nav>
            </div>
        </head>

        
      

        <div class="row">
            <div class="col">
                <h1>THANH HÓA</h1>
                <p>Thanh Hóa cũng được biết đến như là vùng đất “địa linh nhân kiệt” 
                    với bề dày lịch sử hào hùng và truyền thống văn hóa đặc sắc. Nhiều di 
                    tích lịch sử, văn hóa đã được Thanh Hóa bảo tồn, phát triển, đáp ứng nhu 
                    cầu tham quan, tín ngưỡng của nhân dân địa phương và du khách.</p>
                <button type="button" class="button">Tìm hiểu</button>
            </div>

            <div class="col">
                <div class="cols">
                    <div class="card card1">
                        <h5>Ẩm thực</h5>
                    </div>
                    <div class="card card2">
                        <h5>Tour du lịch</h5>
                        <a href=""></a>
                    </div>
                    <div class="card card3">
                        <h5>Địa điểm </h5>
                    </div>
                    <div class="card card4">
                        <h5>Thành phố Thanh Hóa</h5>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</body>
</html>