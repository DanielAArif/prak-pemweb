<?php
include("koneksi.php");
session_start();


if(!isset($_SESSION['login'])){
    header("location: login.php");
    exit;
}

// Mengambil data semua pemain
$query = "SELECT * FROM `pemain`";
$result = mysqli_query($koneksi, $query);

// Menutup koneksi database setelah data diambil
mysqli_close($koneksi);
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
        <a href="logout.php" class="logout-button" onclick="return confirm('Are you sure want to logout?')">Logout</a>
        <ul>
            <li><a href="home.php">Homepage</a></li>
            <li><a href="player.php">Players</a></li>
            <li><a href="home.php#berita">News</a></li>
            <li><a href="video.php">Videos</a></li>
            <li><a href="profil.php"><img src="../gambar/profil1.png"/></a></li>
        </ul>
    </nav>
    <div class="title">
        <h1>Players</h1>
    </div>

        <?php
        // Menampilkan informasi semua pemain dengan while loop
        while ($data_pemain = mysqli_fetch_assoc($result)) {?>
    <div class="main-table">
        <div class="player-table">
            <table >
                <tr height="60px">
                    <th class="player-pic" rowspan="4" width="250px"><img src="<?php echo $data_pemain['foto'] ?>" style="background-color: #F05941"/></th>
                    <td><p>Player Details:</p></td>
                </tr>
                <tr height="60px">
                    <td><strong>Name : </strong><p><?php echo $data_pemain['nama'] . "(" . $data_pemain['no_punggung'] . ")"; ?></p></td>
                    <td><strong>Position : </strong><p><?php echo $data_pemain['role']; ?></p></td>
                </tr>
                <tr height="60px">
                    <td><strong>Country : </strong><p><?php echo $data_pemain['negara']; ?></p></td>
                    <td><strong>Height : </strong><p><?php echo $data_pemain['tinggibadan']; ?></p></td>
                </tr>
                <tr height="60px">
                    <td><strong>Age : </strong><p><?php echo $data_pemain['umur']; ?></p></td>
                    <td><strong>Weight : </strong><p><?php echo $data_pemain['beratbadan']; ?></p></td>
                </tr>
            </table>
            
        </div>
        
    </div>

    <?php
    }
    ?>

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