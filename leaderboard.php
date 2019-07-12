<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Leaderboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/leaderboard.css">
</head>
<body>
<?php
    //create $csv array and populate it with the
    //player data from the csv file
    $csv = array();
    $file = fopen("scores.csv","r");
    while (($line = fgetcsv($file, 1000)) !== false)
        $csv[] = $line;
        fclose($file);
        //get the player count by checking the size of the array
        $playerCount=sizeof($csv,0);
?>
    <!--Entire website encapsulating div-->
    <div class="container">
        <!--Website title-->
        <div class="Title"><h1>Leaderboard</h1></div>
        <!--Table div-->
        <div class="table">
            <!--Leaderboard table. This will grow dynamically
            depending on the player count-->
            <table>
                <tr class="even_row">
                    <th class="table_header">Rank</th>
                    <th class="table_header">Player</th>
                    <th class="table_header">Score</th>
                </tr>
            <?php
                //bubble sort array of players
                for ($outer = 0; $outer < $playerCount; $outer++) {
                    for ($inner = 0; $inner < $playerCount; $inner++) {
                     if ($csv[$outer][2] > $csv[$inner][2]) {
                      $tmp = $csv[$outer];
                      $csv[$outer] = $csv[$inner];
                      $csv[$inner] = $tmp;
                     }
                    }
                   }
                //generate table rows from sorted csv array
                //table rows will be identified as either even or odd
                //for CSS styling purposes
                for ($i=0;$i<$playerCount;$i++){
                    $j=$i+1;
                    if($i%2!=0){
                        echo "<tr class=\"even_row\"><td>$j</td><td>".$csv[$i][1]."</td><td>".$csv[$i][2]."</td></tr>";
                    }
                    else{
                        echo "<tr class=\"odd_row\"><td>$j</td><td>".$csv[$i][1]."</td><td>".$csv[$i][2]."</td></tr>";
                }
            }
            ?>
            </table>
        </div>
        <div class="buttons">
        <table>
        <tr>
            <td>
                <form action="index.php">
                    <input type="submit" value="Play Again" />
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
</div>
    </div>
</body>
</html>