<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css"  href="../style/profil.css">
    <title>GSW-Profile</title>
</head>
<body>
    <div class="box">
        <div class="account-info">
            <h2>ACCOUNT INFORMATION</h2>
            <form action="POST">
                <div class="username">
                    <div class="name-u">Username</div>
                    <div class="dot">:</div>
                    <div class="input-box"><input type="text" name="username"><br/></div>
                </div>
                <div class="email">
                    <div class="name-e">Email</div>
                    <div class="dot">:</div>
                    <div class="input-box"><input type="text" name="email"><br/></div>
                </div>
            </form>
            <hr>
        </div>
        <div class="change-pass">
            <h2>CHANGE PASSWORD</h2>
            <form method="POST" action="">
                <div class="input-pass"><input type="password" name="password" placeholder="Password"><br/></div>
                <div class="input-pass"><input type="password" name="confirm_password" placeholder="Confirm Password"><br/></div>
                <div class="submit-box"><button type="submit" name="submit">Confirm</button></div>
            </form>
        </div>
    </div>
</div>
</body>
</html>