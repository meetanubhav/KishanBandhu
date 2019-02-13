<?php
session_start();
session_destroy();
session_unset($_SESSION["lid"]);
session_unset($_SESSION['sessionid']);
header('location:../index.html');
?>