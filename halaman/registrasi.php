<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        include("koneksi.php");

        if ($password === $confirm_password) {
        
            $query = "INSERT INTO user(username, email, password) VALUES ('$username','$email','$password')";
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
</head>
<body>
    <div class="box">
        <h2>CREATE NEW ACCOUNT</h2>
        <form method="POST">
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
                <input type="text" name="confirm_password" placeholder="Confirm Password" >
            </div>
            <div class="submit-box">
                <button type="submit" name="submit">Sign Up</button>
            </div>
            <p>Already have an account? <a href="login.php" style="color: #BE3144; text-decoration: none;">Log in</a></p>
        </form>        
    </div>
</body>
</html>