<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css"  href="../style/profil.css">
    <title>GSW-Profile</title>
</head>
<body>
    <nav class="menu">
        <a href="logout.php" class="logout-button">Logout</a>
        <ul>
            <li><a href="home.php">Beranda</a></li>
            <li><a href="player.php">Players</a></li>
            <li><a href="berita.php">Berita</a></li>
            <li><a href="video.php">Video</a></li>
            <li><a href="profil.php"><img src="../style/profil.png"/></a></li>
        </ul>
    </nav>
    <div class="bg">
    <div class="box" style="height: 700px">
        <div class="account-info">
            <h2>ACCOUNT INFORMATION</h2>
            <form action="POST">
                <div class="username">
                    <div class="name-u">Username</div>
                    <div class="dot">:</div>
                    <div class="input-box"><input type="text" name="username" readonly><br/></div>
                </div>
                <div class="email">
                    <div class="name-e">Email</div>
                    <div class="dot">:</div>
                    <div class="input-box"><input type="text" name="email" readonly><br/></div>
                </div>
            </form>
            <br>
            <div class="submit-box"><button type="submit" name="hapus_akun" style="padding: 15px 30px;" onclick="return hapus_akun()">Hapus Akun</button></div>
            <hr>
        </div>
        <div class="change-pass">
            <h2>CHANGE PASSWORD</h2>
            <form method="POST" action="">
                <div class="input-pass"><input type="password" name="password" placeholder="Password"><br/></div>
                <div class="input-pass"><input type="password" name="confirm_password" placeholder="Confirm Password"><br/></div>
                <div class="submit-box"><button type="submit" name="submit" style="padding: 15px 40px;">Confirm</button></div>
            </form>
        </div>
    </div>
    </div>
</div>
<script>
    function hapus_akun(){
        if (confirm("Apakah anda yakin ingin menghapus akun ini?") == true) {
            //PROSES HAPUS AKUN DISINI!
        } else {
            window.location.href = "profil.php";
        }
    }
</script>
</body>
</html>