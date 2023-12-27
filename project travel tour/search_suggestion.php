<?php
    require "../connect_db.php";
    if (isset($_GET["userInput"])) {
        $userInput = $_GET["userInput"];
        $check_sql = "SELECT ten_tour FROM tour WHERE ten_tour LIKE '%$userInput%'";
        $result_check = $conn->query($check_sql);
        if ($result_check->num_rows > 0) {
            while ($row = $result_check->fetch_assoc()) {
                echo "<div class='suggestion'> ".$row["ten_tour"] ."</div>";
            }
        }else {
            echo "khong tim thay tour nao";
        }
    }else {
        echo "khong nhan thay userInput";
    }
?>