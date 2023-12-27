<?php
   session_start();
   session_destroy();
   
   // Chuyển hướng người dùng đến trang đăng nhập hoặc trang chủ
   header('Location: login.html');
  
   exit;
   
?>