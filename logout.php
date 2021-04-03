<?php
session_start();
unset($_SESSION['user']);
session_destroy();
header("Location: https://zenon-magnapark.herokuapp.com/index.php");
