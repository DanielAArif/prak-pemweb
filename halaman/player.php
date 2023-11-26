<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSW - Players</title>
    <link rel="icon" href="../gambar/title.png">
    <link rel="stylesheet" type="text/css" href="../style/player.css">
</head>
<body>
    <nav class="menu">
        <a href="logout.php" class="logout-button">Logout</a>
        <ul>
            <li><a href="home.php">Beranda</a></li>
            <li><a href="player.php">Players</a></li>
            <li><a href="home.php#berita">Berita</a></li>
            <li><a href="video.php">Video</a></li>
            <li><a href="profil.php"><img src="../gambar/profil1.png"/></a></li>
        </ul>
    </nav>
    <div class="title">
        <h1>Players</h1>
    </div>
    <div class="main-table">
        <div class="player-table">
            <table border="1">
                <tr height="60px">
                    <th class="player-pic" rowspan="4" width="250px"><img src="../gambar/curry.webp" /></th>
                    <td><p>Player Details:</p></td>
                </tr>
                <tr height="60px">
                    <td><strong>Name : </strong><p>Stephen Curry (30)</p></td>
                    <td><strong>Position : </strong><p>Point Guard</p></td>
                </tr>
                <tr height="60px">
                    <td><strong>Country : </strong><p>USA</p></td>
                    <td><strong>Height : </strong><p>6'3"</p></td>
                </tr>
                <tr height="60px">
                    <td><strong>Age : </strong><p>35</p></td>
                    <td><strong>Weight : </strong><p>185 lbs</p></td>
                </tr>
            </table>
        </div>
        <button><a href="update_player.php">Edit</a></button>
    </div>
    <div class="footer">
        <div class="social">
            <a href="https://instagram.com/warriors?igshid=NGVhN2U2NjQ0Yg==" target="_blank"><img src="../gambar/instagram.png"/></a>
            <a href="https://twitter.com/warriors" target="_blank"><img src="../gambar/twitter.png"/></a>
            <a href="https://www.youtube.com/user/GoldenStateWarriors" target="_blank"><img src="../gambar/youtube.png"/></a>
        </div>
        <p>© 2020 NBA Media Ventures, LLC. All rights reserved</p>
    </div>
</body>
</html>