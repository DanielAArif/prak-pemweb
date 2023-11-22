<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSW - Homepage</title>
    <link rel="stylesheet" type="text/css" href="../style/beranda.css">
</head>
<body>
    <nav class="menu">
        <a href="logout.php" class="logout-button">Logout</a>
        <ul>
            <li><a href="home.php">Beranda</a></li>
            <li><a href="player.php">Players</a></li>
            <li><a href="berita.php">Berita</a></li>
            <li><a href="video.php">Video</a></li>
            <li><a href="profil.php"><img src="../gambar/profil.png"/></a></li>
        </ul>
    </nav>
    <div class="title">

    </div>
    <div class="index-news">
        <table cellspacing="10">
            <tr>
                <td class="news-pic"><img src="../gambar/berita1.jpg" width="600" height="330"/></td>
                <td class="news-pic"><img src="../gambar/berita2.webp" width="600" height="330"/></td>
            </tr>
            <tr>
                <td class="news-title" valign="top">Klay Thompson Stays Ice Cold in Thunder Loss</td>
                <td class="news-title" valign="top">Draymond Green Gets Called Out By Warriors Coach Steve Kerr</td>
            </tr>
            <tr>
                <td class="news-button"><a href="https://www.yardbarker.com/nba/articles/klay_thompson_stays_ice_cold_in_thunder_loss/s1_17149_39548159"
                class="tombol" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.25);">Read More</a></td>
                <td class="news-button"><a href="https://www.yardbarker.com/nba/articles/draymond_green_gets_called_out_by_warriors_coach_steve_kerr/s1_17149_39548294"
                class="tombol" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.25);">Read More</a></td>
            </tr>
        </table>
    </div>
    <div class="index-vids">
        <table cellspacing="10">
            <tr>
                <td class="vids-pic">
                <iframe width="400" height="225" src="https://www.youtube.com/embed/ajKBVMmPzd4?si=BN8ZRJGaiOKhhCls" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
                </td>
                <td class="vids-pic">
                <iframe width="400" height="225" src="https://www.youtube.com/embed/JrPyV4hBAR8?si=RH-4GUbtaYGLiuk1" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
                </td>
                <td class="vids-pic">
                <iframe width="400" height="225" src="https://www.youtube.com/embed/o5baQNP_y60?si=gjS4O069Eh-RAaE3" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
                </td>
            </tr>
        </table>
        <a href="video.php" class="vids-button" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.25);">More Videos</a>
    </div>
    <div class="footer">
        <p>© 2020 NBA Media Ventures, LLC. All rights reserved</p>
    </div>
</body>
</html>