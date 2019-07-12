<?php
session_start();
$cupSelection;
$actualCup=rand(1,4);
$level=rand(1,2);
$csv=$_SESSION['csv'];
$user_id=$_SESSION['user_id'];
$money=(int)$csv[$user_id][2];
if(!empty($_POST["bet"]))
    $bet=(int)$_POST["bet"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Game</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href=<?php echo "./css/games{$actualCup}{$level}.css" ?>>
</head>
<body>
<div class="container">
    <div class="Title">
        <h1>Shell Game<h1>
    </div>
    <div class="label">Cup 1<span class="label2">Cup 2</span></div>
    <div class="squares_container">
        <img id="sq1" src="./images/red_square.png" alt="Square not available" width="100" height="100"
             style="position:absolute">
         <img id="sq2" src="./images/red_square.png" alt="Square not available" width="100" height="100">
         <img id="sq3" src="./images/red_square.png" alt="Square not available" width="100" height="100">
         <img id="sq4" src="./images/red_square.png" alt="Square not available" width="100" height="100">

            <div class="ball">
                <img id= "ball" src="./images/ball.jpg" alt="ball not available" width="50" height="50">
            </div>

    </div>
    <div class="label">Cup 3<span class="label2">Cup 4</span></div>
    <div class="sheet">
        <h2>Guess Which Cup</h2>
        <form method="POST" action="gameresult.php">
            <input type="hidden" name="bet" value=<?php echo $bet ?>>
            <input type="hidden" name="actualcup" value=<?php echo $actualCup ?>>
            <table>
                <tr>
                    <td>Cup #:</td>
                    <td>
                        <input type="radio" name="cup" value=1>1
                        <input type="radio" name="cup" value=2>2
                        <input type="radio" name="cup" value=3>3
                        <input type="radio" name="cup" value=4>4
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="submit"></td>
                </tr>
            </table>
    </div>
</div>
</body>
</html>