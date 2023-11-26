<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css"  href="../style/update_player.css">
    <title>GSW - Update Player</title>
    <link rel="icon" href="../gambar/title.png">
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
    <div class="bg">
    <div class="box" style="height: 850px">
        <div class="account-info">
            <h2>UPDATE PLAYER DETAILS</h2>
            <form action="POST">
                <div class="name">
                    <div class="name_">Name</div>
                    <div class="dot">:</div>
                    <div class="input-box"><input type="text" name="name"><br/></div>
                </div>
                <div class="number">
                    <div class="number_">Jersey Number</div>
                    <div class="dot">:</div>
                    <div class="input-box"><input type="text" name="number"><br/></div>
                </div>
                <div class="country">
                    <div class="country_">Country</div>
                    <div class="dot">:</div>
                    <div class="input-box"><input type="text" name="country"><br/></div>
                </div>
                <div class="age">
                    <div class="age_">Age</div>
                    <div class="dot">:</div>
                    <div class="input-box"><input type="text" name="age"><br/></div>
                </div>
                <div class="position">
                    <div class="position_">Position</div>
                    <div class="dot">:</div>
                    <div class="input-box"><input type="text" name="position"><br/></div>
                </div>
                <div class="height">
                    <div class="height_">Height</div>
                    <div class="dot">:</div>
                    <div class="input-box"><input type="text" name="height"><br/></div>
                </div>
                <div class="weight">
                    <div class="weight_">Weight</div>
                    <div class="dot">:</div>
                    <div class="input-box"><input type="text" name="weight"><br/></div>
                </div>
                <div class="pic">
                    <div class="pic_">Insert Picture</div>
                    <div class="dot">:</div>
                    <div id="pic-box"><input type="file" name="pic" class="pic-box"><br/></div>
                </div>
            </form>
            <br>
            <div class="submit-box">
                <button type="submit" name="update" style="padding: 15px 30px;">Update</button>
                <button type="submit" name="delete" style="padding: 15px 30px;">Delete</button>
            </div>
        </div>
    </div>
    </div>
</div>
</body>
</html>