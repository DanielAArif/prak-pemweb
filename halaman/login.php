<?php
    include("koneksi.php");
    session_start();

    if(isset($_SESSION['login'])){
        header("location: home.php");
        exit;
    }
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($koneksi, $query);

        if($result && mysqli_num_rows($result) > 0){
            $user = mysqli_fetch_assoc($result);
                if($user['level']=="user"){
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['password'] = $user['password'];
                    $_SESSION['login'] = true;
                    header("Location: home.php");
                    exit();
                }else if($user['level']=="admin"){
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['password'] = $user['password'];
                    $_SESSION['login'] = true;
                    header("location: view_player&pemain.php");
                    exit();
                }else{
                    echo "<script>alert('Wrong!')</script>";   
                }
        }else{
        echo "<script>alert('username not found!')</script>";  
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css"  href="../style/login.css">
    <title>Log In</title>
    <link rel="icon" href="../gambar/title.png">
</head>
<body>
    <div class="box">
        <h2>LOGIN ACCOUNT</h2>
        <form name="formMasuk" method="POST" onsubmit="return validateForm()">
            <div class="input-box">
                <input type="text" name="email" placeholder="Email" >
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{5,10}"
                title="Passwords must have uppercase letters, lowercase letters, numbers and unique characters. Minimum 5 characters and maximum 10 characters.">
            </div>
            <div class="submit-box">
                <button type="submit" name="submit">Log in Account</button>
            </div>
            <p>Don't have an account? <a href="registrasi.php" style="color: #BE3144; text-decoration: none;">Register here</a></p>
        </form>        
    </div>
    <script>
        function validateForm() {
            if (document.forms["formMasuk"]["email"].value == "") {
                alert("Please fill in your email");
                document.forms["formMasuk"]["email"].focus();
                return false;
            }
            if (document.forms["formMasuk"]["password"].value == "") {
                alert("Please fill in your password");
                document.forms["formMasuk"]["password"].focus();
                return false;
            }
        }
    </script>
</body>
</html>