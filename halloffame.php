<?php

$db = new PDO('mysql:host=db; dbname=halloffame', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT `name`, `age`,`nationality`,`goal`,`image` FROM `Players`;');
$query->execute();
$fame = $query->fetchAll();
echo '<pre>';

echo '</pre>';






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="halloffame.css">

    <title>halloffame</title>
</head>
<body>
<div class="navTop">
    <div class="<img src="halloffame.png"></div>
    <div class="title">
        <h1> FOOTBALLERS HALL OF FAME </h1>
    </div>
</div>

<header>
<class="logo"> <img src="football.jpg" alt= "hall of fame logo"/>
</header>

<h3> H.O.F Nominees </h3>

<div id="container"
<div class="Players">

    <?php foreach ($fame as $player) {
        echo "<div class='image'>";
        echo "<img src='" . $player['image'] . "'/>";
        echo "</div>";
        echo "<div class='player'>";
      echo "<div> {$player['name']} <br> </div>";
      echo "<div> {$player['age']} <br> </div>";
      echo "<div> {$player['nationality']} <br> </div>";
      echo "<div> {$player['goal']} <br> </div>";
        echo "</div>";
    }?>

</div>
</body>
<div class="add-player-btn-container">
    <div class="add-player-btn-box-placement">
        <a href="../add.php" class="active">Add Player</a>
    </div>
</div>