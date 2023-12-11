<?php
    session_start();
    if (isset($_SESSION["name"])) {
        echo "xin chao: " .$_SESSION["name"];
    }
?>