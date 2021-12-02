<?php
session_start();
session_destroy();
// Redirect to the login page:
header('Location: https://aadg-api-restaurante.herokuapp.com/index.php');
?>