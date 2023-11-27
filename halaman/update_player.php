<?php 
    include("koneksi.php");
    session_start();

    if(!isset($_SESSION['login'])){
        header("location: login.php");
        exit;
    }
    $no_punggung = $_GET['editid'];
    $query = "SELECT * FROM `pemain` WHERE no_punggung='$no_punggung'";
    $result = mysqli_query($koneksi,$query);
    $data_user = mysqli_fetch_assoc($result);



    if (isset($_POST['update'])){
        $no_punggung = $_POST['number'];
        $nama = $_POST['name'];
        $role = $_POST['position'];
        $negara = $_POST['country'];
        $umur = $_POST['age'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $foto = $_POST['pic'];

        $query = "UPDATE `pemain` SET no_punggung='$no_punggung', nama='$nama', role='$role', negara='$negara', umur='$umur', tinggibadan='$height', beratbadan='$weight', foto='$foto'  WHERE no_punggung='$no_punggung'";
        $result = mysqli_query($koneksi, $query);
            if ($result) {
                echo "Edit successful";
                header("Location: player.php");
            } else {
                echo "Pembaruan gagal: " . mysqli_error($koneksi);
            }
        }
        if(isset($_POST['delete'])) {
            $no_punggung = $_GET['editid'];

            $query = "DELETE FROM pemain WHERE no_punggung= '$no_punggung'";
            $result = mysqli_query($koneksi, $query);
            if($result) {
                echo "<script>alert('Berhasil menghapus pemain!'); window.location.href = 'player.php'</script>";
                exit();
            } else {
                echo "<script>alert('Gagal menghapus pemain!');";        
            }
        }
?>


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
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="name">
                    <div class="name_">Name</div>
                    <div class="dot">:</div>
                    <div class="input-box"><input type="text" name="name" value="<?php echo $data_user['nama']; ?>"><br/></div>
                </div>
                <div class="number">
                    <div class="number_">Jersey Number</div>
                    <div class="dot">:</div>
                    <div class="input-box"><input type="text" name="number" value="<?php echo $data_user['no_punggung']; ?>"><br/></div>
                </div>
                <div class="country">
                    <div class="country_">Country</div>
                    <div class="dot">:</div>
                    <div class="input-box"><input type="text" name="country" value="<?php echo $data_user['negara']; ?>"><br/></div>
                </div>
                <div class="age">
                    <div class="age_">Age</div>
                    <div class="dot">:</div>
                    <div class="input-box"><input type="text" name="age" value="<?php echo $data_user['umur']; ?>"><br/></div>
                </div>
                <div class="position">
                    <div class="position_">Position</div>
                    <div class="dot">:</div>
                    <div class="input-box"><input type="text" name="position" value="<?php echo $data_user['role']; ?>"><br/></div>
                </div>
                <div class="height">
                    <div class="height_">Height</div>
                    <div class="dot">:</div>
                    <div class="input-box"><input type="text" name="height" value="<?php echo $data_user['tinggibadan']; ?>"><br/></div>
                </div>
                <div class="weight">
                    <div class="weight_">Weight</div>
                    <div class="dot">:</div>
                    <div class="input-box"><input type="text" name="weight" value="<?php echo $data_user['beratbadan']; ?>"><br/></div>
                </div>
                <div class="pic">
                    <div class="pic_">Insert Picture</div>
                    <div class="dot">:</div>
                    <div id="pic-box"><input type="file" name="pic" class="pic-box" value="<?php echo $data_user['foto']; ?>"><br/></div>
                </div>
                <div class="submit-box">
                    <button type="submit" name="update" style="padding: 15px 30px;">Update</button>
                    <button type="submit" name="delete" style="padding: 15px 30px;">Delete</button>
                </div>
            </form>
            <br>
        </div>
    </div>
    </div>
</div>
</body>
</html>