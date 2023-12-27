<?php

require "../connect_db.php";

if (isset($_POST['tourIDs'])) {
    $tourIDs = $_POST['tourIDs'];

    

    $deleteQuery = "DELETE FROM tour WHERE tour_id IN ($tourIDs)";

    $result = $conn->query($deleteQuery);
        if ($result === TRUE) {
            echo "DELETED";
        } else {
            echo $tourIDs;
        }
    
}

?>
