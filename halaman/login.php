<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user where username='$username'";
        $result = mysqli_query($koneksi,$query);

        if($result && mysqli_num_rows($result) > 0){
            $user = mysqli_fetch_assoc($result);
            $storedpassword = $user['password'];
            
                session_start();
                $_SESSION['id'] = ['id'];
                $_SESSION['username'] = ['username'];
                $_SESSION['password'] = ['password'];
                header("Location: index.php");
                exit;
            
        }else {
            echo "username tidak ditemukan";
        }}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css"  href="../style/login.css">
    <title>Log In</title>
</head>
<body>
    <div class="box">
        <h2>LOGIN ACCOUNT</h2>
        <form>
            <div class="input-box">
                <input type="text" name="email" placeholder="Email" >
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="submit-box">
                <button type="submit" name="submit">Log in Account</button>
            </div>
            <p>Don't have an account? <a href="registrasi.php" style="color: #BE3144; text-decoration: none;">Register here</a></p>
        </form>        
    </div>
</body>
</html>