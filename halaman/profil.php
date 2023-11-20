<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css"  href="../style/login.css">
    <title>Log In</title>
</head>
<body>
    <div class="account-info">
        <h2>ACCOUNT INFORMATION</h2>
        <form action="POST">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname">
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
        </form>
        <hr>
    </div>
    <div class="box">
        <h2>LOGIN ACCOUNT</h2>
        <form name="formMasuk" method="POST" onsubmit="return validateForm()">
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