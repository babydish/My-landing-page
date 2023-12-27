<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa tour</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
   
</head>
<body>

    <?php
        require "../connect_db.php";
        $info_tour = "SELECT * FROM tour";
        $result = $conn->query($info_tour);

        if ($result->num_rows > 0) {
            echo "<form action='' method='post'>";
            echo "<table>";
            echo "<tr>";
            echo "<th>Chọn</th>";
            echo "<th>Tour id</th>";
            echo "<th> Name tour</th>";
            echo "<th>Description</th>";
            echo "<th>Price</th>";
            echo "<th>Ngay khoi hanh</th>";
            echo "<th>Thoi gian di</th>";
            echo "<th>Phuong tien</th>";
            echo "<th>Hinh anh </th>";
            echo "</tr>";

            while ($row = $result->fetch_assoc()) {
                $tour_id = $row["tour_id"];
                echo "<tr>";
                echo "<td><input type='checkbox' name='tourToDelete[]' value='$tour_id' class='tourToDeletes'></td>";
                echo "<td>" . $tour_id . "</td>";
                echo "<td>" . $row["ten_tour"] . "</td>";
                echo "<td>" . $row["mo_ta"] . "</td>";
                echo "<td>" . $row["gia_tien"] . "</td>";
                echo "<td>" . $row["ngay_khoi_hanh"] . "</td>";
                echo "<td>" . $row["thoi_gian_di"] . "</td>";
                echo "<td>" . $row["phuong_tien"] . "</td>";
                echo "<td>" .'<img src="' . $row["hinh_anh_url"] . '" alt="' . $row["ten_tour"] . '">'."</td>";
                echo "</tr>";
            }

            echo "</table>";
            echo "<input type='submit' name='deleteTours' value='Xóa Tours' id='delete_tours' >";
            echo "</form>"; 
        } else {
            echo "Không có tour nao.";
        }
       
    ?>
    <script>
        function delete_tour() {
            document.querySelector('#delete_tours').addEventListener('click', function() {
                var checkboxes = document.querySelectorAll('input[name="tourToDelete[]"]:checked');
               
                var tourIDs = '';

                for (var i = 0; i < checkboxes.length; i++) {
                    if (i > 0) {
                        tourIDs += ",";
                    }
                    tourIDs += checkboxes[i].value;
                }

                if (tourIDs.length > 0) {
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'delete_sql.php', true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.send('tourIDs=' + tourIDs);

                    xhr.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            var response = this.responseText;
                            if (response == "DELETED") {
                                alert(`Ban da xoa thanh cong`);
                            }
                            else {
                                alert(`Error: ${response}`)
                            }
                           
                        }
                    };
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            delete_tour();
        });
    </script>

</body>
</html>