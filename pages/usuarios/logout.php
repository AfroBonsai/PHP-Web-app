<?php
session_start();
session_destroy();
// Redirect to the login page:
header('Location: http://localhost:80/PHP-Web-app/index.php');
?>