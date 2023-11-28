<?php 
    session_start();

    if(!isset($_SESSION['login'])){
        header("location: login.php");
        exit;
    }
?>

<?php
    include("koneksi.php");

    if(isset($_POST['update'])){
        $no_punggung = $_POST['number'];
        $nama = $_POST['name'];
        $role= $_POST['position'];
        $negara= $_POST['country'];
        $umur = $_POST['age'];
        $tinggibadan = $_POST['height'];
        $beratbadan = $_POST['weight'];
        $foto = $_FILES['foto']['name'];
		if($foto!=''){
			$upload = '../gambar/gambarpemain/'.$foto;
			move_uploaded_file($_FILES['foto']['tmp_name'], $upload);
		}

        $query = "INSERT INTO pemain(no_punggung, nama, role, negara, umur, tinggibadan, beratbadan, foto) VALUES ('$no_punggung','$nama','$role','$negara','$umur','$tinggibadan','$beratbadan','$upload')";
        $result = mysqli_query($koneksi, $query);
        if($result){
            header("Location: view_player&pemain.php");
            exit;
        }else {
            echo "gagal Menambahkan user";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Insert Player</title>
    <link rel="icon" href="../gambar/title.png">
    <link rel ="stylesheet" type="text/css"  href="../style/insert_pl.css">
</head>
<body>
    <nav class="menu">
        <a href="view_player&pemain.php" class="logout-button">Back</a>
        <a href="logout.php" class="back-button" onclick="return confirm('Are you sure want to logout?')">Logout</a>
    </nav>
    <div class="bg">
    <div class="box">
        <div class="account-info">
        <h2>Input Player Data:</h2>
        <form name="myForm" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validateForm()" enctype="multipart/form-data">
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
                    <div id="pic-box"><input type="file" name="foto" class="pic-box"><br/></div>
                </div>
                <div class="submit-box">
                    <button type="submit" name="update" style="padding: 15px 30px;" onclick="return confirm('Are you sure want to insert this to database?')">Insert Data</button>
                </div>
            </form>
        </div>        
    </div>
    </div>
    <script>
        function validateForm() {
            var name = document.forms["myForm"]["name"].value;
            var number = document.forms["myForm"]["number"].value;
            var country = document.forms["myForm"]["country"].value;
            var age = document.forms["myForm"]["age"].value;
            var position = document.forms["myForm"]["position"].value;
            var height = document.forms["myForm"]["height"].value;
            var weight = document.forms["myForm"]["weight"].value;
            var foto = document.forms["myForm"]["foto"].value;
            if (name == "" || number == "" || country == "" || age == "" || position == "" || height == "" || weight == "" || foto == "") {
                alert("All field must be filled out");
                return false;
            }
        }
    </script>
</body>
</html>