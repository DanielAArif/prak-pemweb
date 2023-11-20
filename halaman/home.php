<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GSW - Homepage</title>
    <link rel="stylesheet" type="text/css" href="../style/home.css">
</head>
<body>
    <nav class="menu">
        <ul>
            <li><a href="logout.php" style="display: flex; margin-right: 600px;">Logout</a></li>
            <li><a href="home.php">Beranda</a></li>
            <li><a href="player.php">Players</a></li>
            <li><a href="berita.php">Berita</a></li>
            <li><a href="video.php">Video</a></li>
            <li><a href="profil.php"><img src="../style/profil.png"/></a></li>
        </ul>
    </nav>
    <div class="title">

    </div>
    <div class="index-news">
        <table>
            <tr>
                <td class="news-pic"><a href="berita1.php"><img src="" /></a></td>
                <td class="news-pic"><a href="berita2.php"><img src="" /></a></td>
            </tr>
            <tr>
                <td class="news-title" valign="top">Klay Thompson Stays Ice Cold in Thunder Loss</td>
                <td class="news-title" valign="top">Draymond Green Gets Called Out By Warriors Coach Steve Kerr</td>
            </tr>
            <tr>
                <td class="news-button"><a href="berita1.php" class="tombol" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.25);">Read More</a></td>
                <td class="news-button"><a href="berita2.php" class="tombol" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.25);">Read More</a></td>
            </tr>
        </table>
    </div>
    <div class="index-vids">
        <table>
            <tr>
                <td class="vids-pic"><a href="video.php"><img src="" /></a></td>
                <td class="vids-pic"><a href="video.php"><img src="" /></a></td>
            </tr>
            <tr>
                <td class="vids-title" valign="top">Klay Thompson Stays Ice Cold in Thunder Loss</td>
                <td class="vids-title" valign="top">Draymond Green Gets Called Out By Warriors Coach Steve Kerr</td>
            </tr>
        </table>
        <a href="video.php" class="vids-button" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.25);">More Videos</a>
    </div>
    <div class="footer">
        <p>© 2020 NBA Media Ventures, LLC. All rights reserved</p>
    </div>
</body>
</html>