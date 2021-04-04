<?php
session_start();
unset($_SESSION['user']);
session_destroy();
header('Location: https://magnapark.herokuapp.com/index.php');
