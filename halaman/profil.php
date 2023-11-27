<?php
    include("koneksi.php");
    session_start();

    //delete
    // Cek apakah formulir dikirimkan untuk menghapus akun
    if(isset($_POST['hapus_akun'])) {
        $id = $_POST['id_account'];

        $query = "DELETE FROM user WHERE id= '$id'";
        $result = mysqli_query($koneksi, $query);
        if($result) {
            $_SESSION['login'] = false;
            session_destroy();
            header("Location: login.php");
        } else {
            echo "<script>alert('Gagal menghapus akun!');";        
        }
    }

    if (isset($_POST['submit'])){
        $id = $_SESSION['id'];
        $password = $_POST['password'];
        $cpassword = $_POST['confirm_password'];

        if ($password !== $cpassword) {
            echo "Passwords dan confirm password tidak sama";
        } else {
            $query = "UPDATE `user` SET password='$password' WHERE id='$id'";
            $result = mysqli_query($koneksi, $query);
            if ($result) {
                echo "<script> alert ('berhasil mengubah password!'); window.location.href = 'profil.php'</script>";
                header("Location: profil.php");
            } else {
                echo "Pembaruan gagal: " . mysqli_error($koneksi);
            }
        }
    }
?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css"  href="../style/profil.css">
    <title>GSW - Profile</title>
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
    <div class="box" style="height: 700px">
        <div class="account-info">
            <h2>ACCOUNT INFORMATION</h2>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="hidden" name="id_account" value="<?php echo $_SESSION['id'];?>">
                <div class="username">
                    <div class="name-u">Username</div>
                    <div class="dot">:</div>
                    <div class="input-box"><input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" readonly><br/></div>
                </div>
                <div class="email">
                    <div class="name-e">Email</div>
                    <div class="dot">:</div>
                    <div class="input-box"><input type="text" name="email" value="<?php echo $_SESSION['email']; ?>" readonly><br/></div>
                </div>
                <br>
                <div class="submit-box"><button type="submit" name="hapus_akun" style="padding: 15px 30px;" onclick="return confirm('Are you sure want to delete account?')">Hapus Akun</button></div>
                <hr>
            </form>


        </div>
        <div class="change-pass">
            <h2>CHANGE PASSWORD</h2>
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="input-pass"><input type="password" name="password" placeholder="Password"><br/></div>
                <div class="input-pass"><input type="password" name="confirm_password" placeholder="Confirm Password"><br/></div>
                <div class="submit-box"><button type="submit" name="submit" style="padding: 15px 40px;" onclick="return confirm('Are you sure want to update your account password?')">Confirm</button></div>
            </form>
        </div>


    </div>
    </div>
</div>
</body>
</html>