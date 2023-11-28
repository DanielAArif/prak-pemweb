<?php 
    session_start();

    if(!isset($_SESSION['login'])){
        header("location: login.php");
        exit;
    }
?>

<?php 
    include("koneksi.php");
    
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
        $foto = $_FILES['foto']['name'];

        if($foto!=''){
            $row = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from pemain where no_punggung = '$no_punggung'"));
		    $filegambar = $row['foto'];
		    unlink($filegambar);
			$upload = '../gambar/gambarpemain/'.$foto;
			move_uploaded_file($_FILES['foto']['tmp_name'], $upload);
			$update = "UPDATE pemain SET no_punggung='$no_punggung', nama='$nama', role='$role', negara='$negara',
			umur='$umur', tinggibadan='$height', beratbadan='$weight', foto='$upload' WHERE no_punggung='$no_punggung'";
		}else{
			$update = "UPDATE pemain SET no_punggung='$no_punggung', nama='$nama', role='$role', negara='$negara',
			umur='$umur', tinggibadan='$height', beratbadan='$weight' WHERE no_punggung='$no_punggung'";
		}
		$query = mysqli_query($koneksi, $update);
		if($query){
			?>
				<script>alert('Update success!')
				document.location="view_player&pemain.php";
				</script>
			<?php
		}else{
            ?>
                <script>alert('Update Failed!')
                document.location="view_player&pemain.php";
                </script>
            <?php
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css"  href="../style/update_pl.css">
    <title>GSW - Update Player</title>
    <link rel="icon" href="../gambar/title.png">
</head>
<body>
    <nav class="menu">
        <a href="view_player&pemain.php" class="logout-button">Back</a>
        <a href="logout.php" class="back-button" onclick="return confirm('Are you sure want to logout?')">Logout</a>
    </nav>
    <div class="bg">
    <div class="box" style="height: 850px">
        <div class="account-info">
            <h2>UPDATE PLAYER DETAILS</h2>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
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
                    <div id="pic-box"><input type="file" name="foto" class="pic-box"><br/></div>
                </div>
                <div class="submit-box">
                    <button type="submit" name="update" style="padding: 15px 30px;" onclick="return confirm('Are you sure want to update?')">Update</button>
                </div>
            </form>
            <br>
        </div>
    </div>
    </div>
</div>
</body>
</html>