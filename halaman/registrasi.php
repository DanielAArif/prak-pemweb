<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $level = 'user';

        include("koneksi.php");

        if ($password === $confirm_password) {
        
            $query = "INSERT INTO user(username, email, password, level) VALUES ('$username','$email','$password','$level')";
            $result = mysqli_query($koneksi, $query);
            if($result){
                header("Location: login.php");
                exit;
            }else {
                echo "gagal Menambahkan user";
            }
        }else {
            echo "kata sandi yang anda masukkan salah";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css"  href="../style/registrasi.css">
    <title>Sign Up</title>
    <link rel="icon" href="../gambar/title.png">
</head>
<body>
    <div class="box">
        <h2>CREATE NEW ACCOUNT</h2>
        <form name="formPendaftaran" method="POST" onsubmit="return validateForm()">
        <div class="input-box">
                <input type="text" name="username" placeholder="Username" >
            </div>
            <div class="input-box">
                <input type="text" name="email" placeholder="Email" >
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="input-box">
                <input type="password" name="confirm_password" placeholder="Confirm Password" >
            </div>
            <div class="submit-box">
                <button type="submit" name="submit">Sign Up</button>
            </div>
            <p>Already have an account? <a href="login.php" style="color: #BE3144; text-decoration: none;">Log in</a></p>
        </form>        
    </div>
    <script>
        function validateForm() {
            if (document.forms["formPendaftaran"]["username"].value == "") {
                alert("Username Tidak Boleh Kosong");
                document.forms["formPendaftaran"]["username"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["email"].value == "") {
                alert("Email Tidak Boleh Kosong");
                document.forms["formPendaftaran"]["email"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["password"].value == "") {
                alert("Password Tidak Boleh Kosong");
                document.forms["formPendaftaran"]["password"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["confirm_password"].value == "") {
                alert("Konfirmasi Password Tidak Boleh Kosong");
                document.forms["formPendaftaran"]["confirm_password"].focus();
                return false;
            }
            if(document.forms["formPendaftaran"]["password"].value != document.forms["formPendaftaran"]["confirm_password"].value){
                alert("Password Tidak Sama");
                document.forms["formPendaftaran"]["confirm_password"].focus();
                return false;
            }
        }
    </script>
</body>
</html>