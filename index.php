<?php
require_once('config.php');
require_once('functions.php');
session_start();

if ( isset( $_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    $user = in_array_r($user_id, $users);
}
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" type="text/css" media="screen" href="main.css">-->
</head>
<body>
<?php
if ( empty($user)){
    session_destroy();

    include('login.php');
} else {
    include('bookieform.php');
}
?>
</body>
</html>