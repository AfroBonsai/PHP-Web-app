<?php
session_start();
session_destroy();
// Redirect to the login page:
header('Location: http://aadg-api-restaurante.herokuapp.com/index.php');
?>