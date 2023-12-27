<?php   
        require "../connect_db.php";
        if (isset($_GET["tour_name"])) {
            $name_tour = $_GET["tour_name"];
            $check = "SELECT * FROM tour WHERE ten_tour = '$name_tour'";
            $result = $conn->query($check);

            if ($result->num_rows > 0) { 
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='result-tour'>";
                    echo '<p>Ten Tour : ' . $row["ten_tour"] . '</p>';
                    echo '<p>Mo ta: ' . $row["mo_ta"] . '</p>';
                    echo '<p>Gia tien : ' . $row["gia_tien"] . '</p>';
                    echo '<p>ngay khoi hanh : ' . $row["ngay_khoi_hanh"] . '</p>';
                    echo '<p>thoi gian di: ' . $row["thoi_gian_di"] . '</p>';
                    echo '<p>phuong tien: ' . $row["phuong_tien"] . '</p>';
                    echo "</div>";
                }
            } else {
                echo '<p>Tour not found.</p>';
            }
        }  
    ?>