<?php
//create 2D array out of scores sheet
//each row is: id, username, and cash
$csv = array();
$file = fopen("scores.csv","r");
while (($line = fgetcsv($file, 1000)) !== false)
    $csv[] = $line;
   // print_r($csv);
fclose($file);
$_SESSION["csv"]=$csv;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bookie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bookieform.css">
</head>
<body>
    <div class="container">
        <div class="Title">
            <h1>Bookie Sheet<h1>
        </div>
        <div class="sheet">
            <h2>Welcome <?php echo $user['username']; ?>. 
            Your cash is $<?php print_r($csv[$user_id][2]) ?></h2>
        </div>
        <div id="form">
            <form method="POST" action="game.php">
            <table>
                <tr>
                    <td>Place your bet:</td>
                    <td>
                        <input type="radio" name="bet" value=5>$5
                        <input type="radio" name="bet" value=10>$10
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