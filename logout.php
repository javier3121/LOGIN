<?php
session_start();
session_unset();
session_destroy();
header("Location: http://localhost:/clases_php/base/loginpoo/login.php");
?>