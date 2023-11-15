<?php
    include("koneksi.php");
    session_start();
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $alamat = $_POST['alamat'];

        $query = "INSERT INTO user(username,password,gender,tanggal_lahir,alamat) VALUES ('$username','$password','$gender','$tanggal_lahir','$alamat')";
        $result = mysqli_query($koneksi,$query);
        header("Location: login.php");
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
        <form>
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