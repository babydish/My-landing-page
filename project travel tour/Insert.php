<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="ten_tour">Tên Tour:</label>
        <input type="text" name="ten_tour" required> <br>

        <label for="mo_ta">Mô tả:</label>
        <textarea name="mo_ta" required></textarea> <br>

        <label for="gia_tien">Giá Tiền:</label>
        <input type="number" name="gia_tien" required> <br>

        <label for="ngay_khoi_hanh">Ngày Khởi Hành:</label>
        <input type="date" name="ngay_khoi_hanh" required> <br>

        <label for="hinh_anh">Hinh anh</label>
        <input type="text" name="hinh_anh_url" required> <br>

        <input type="submit" name="submit" value="Thêm Tour">
    </form>
    <?php
        require "../connect_db.php";
        if (isset($_POST["submit"])) {
            $tour_name = $_POST["ten_tour"];
            $description = $_POST["mo_ta"];
            $price_tour = $_POST["gia_tien"];
            $Departure_date = $_POST["ngay_khoi_hanh"];
            $url_image = $_POST["hinh_anh_url"];
            $insert_info_tour = "INSERT INTO tour(ten_tour,mo_ta,gia_tien,ngay_khoi_hanh,hinh_anh_url) 
            VALUES ('$tour_name','$description','$price_tour','$Departure_date','$url_image')";
            $result = $conn->query($insert_info_tour);
            if ($result === TRUE) {
                echo "Them thanh cong";
            }
            else {
                echo "error: " .$insert_info_tour ."<br>" .$conn->error;
            }
            
        }

    ?>
    
        
</body>
</html>
