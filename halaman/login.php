<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

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