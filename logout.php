<?php
require_once('config.php');
session_start();
echo 'You are logged out';
session_destroy();
header('Location: login.php');
?>