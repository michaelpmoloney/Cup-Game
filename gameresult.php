<?php
session_start();
$cupSelection=$_POST['cup'];
$actualCup=$_POST['actualcup'];
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
    <link rel="stylesheet" type="text/css" media="screen" href="./css/gamesreveal<?php echo $actualCup; ?>.css">
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
 
    <div class="outcome">
        <h1><?php 
                if (!empty($_POST["cup"])) {

                    $cupSelection=$_POST["cup"];
                    if($cupSelection==$actualCup){
                        $csv[$user_id][2]=($money+$bet);
                        echo "You Win!";
                    } else{
                        $csv[$user_id][2]=($money-$bet);
                        echo "You Lose!";
                    }
                    $file = fopen("scores.csv","w");

                    foreach ($csv as $line) {
                                fputcsv($file,$line);               
                    }
                    fclose($file);
                }       
            ?></h1>
    </div>
    <div class="buttons">
        <table>
        <tr>
            <td>
                <form action="index.php">
                    <input type="submit" value="Retry" />
                </form>
            </td>
            <td>
                <form action="leaderboard.php">
                    <input type="submit" value="Leaderboard" />
                </form>
            </td>
            <td>
                <form action="logout.php">
                    <input type="submit" value="Log Out" />
                </form>
            </td>
        </tr>
    </table>
    </div>
</body>
</html>