# Cup-Game
A web game based on the classic cup gambling game utilizing PHP.


#### Contributors:
Poojitha Ganji - Animations, CSS, HTML<br>
Brandon Harris - Leaderboard page, Presentation material<br>
Michael Moloney - Art Design, Project idea, CSS, function, PHP<br>

#### Objective:
To create a web game using only HTML, CSS, and PHP. Javascript was not allowed. A leaderboard must somehow be implemented without the use of an SQL database. A login page is also required.

#### Description:
Based on the classic cup gambling game where a ball is placed under one of several cups. All the cups are then shuffled. The user must then try to guess which cup the ball is under. The user is asked to first select the amount of money that they would like to bet. The user then clicks the shuffle button. The ball is then placed under a cup, and the cups are shuffled. The user then clicks on the cup that they believe the ball is under. If they guess correctly then they win the amount of their bet. If they guess incorreclty then their bet is subtracted from their "account". A .csv file is used as a rudimentary database since an SQL database was not allowed. The file stores each user's name and money. The file is updated as the game is played. The leaderboard reads from this file and displays the users in descending order based upon the amount of money they have accumulated from playing.

#### Functionality:
* User login
* Bookie form to place bets
* CSS animations for the shuffling of the cups, which are based on a random final destination for the ball
* updating leaderboard
* logout
