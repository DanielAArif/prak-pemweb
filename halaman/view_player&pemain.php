<?php 
    session_start();

    if(!isset($_SESSION['login'])){
        header("location: login.php");
        exit;
    }
?>

<?php
    include("koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - View Data</title>
    <link rel="icon" href="../gambar/title.png">
    <link rel="stylesheet" type="text/css" href="../style/admin_view.css">
</head>
<body>
    <nav class="menu">
        <a href="logout.php" class="back-button" onclick="return confirm('Are you sure want to logout?')">Logout</a>
    </nav>
    <div class="bg">
    <br><br><br>
    <div class="box">
        <h1>User Data</h1>
        <table border="1" class="table">
            <tr>
                <th> ID </th>
                <th> username </th>
                <th> email </th>
                <th> password </th>
            </tr>
        <?php 
            $query = "SELECT * FROM `user`";
            $result = mysqli_query($koneksi,$query);

            while($data_user = mysqli_fetch_assoc($result)){
                $id = $data_user['id'];
                $username = $data_user['username'];
                $email= $data_user['email'];
                $password = $data_user['password'];
                echo "<tr>
                        <td>$id</td>
                        <td>$username</td>
                        <td>$email</td>
                        <td>$password</td>
                      </tr>";
            }
        ?>  
        </table>
        
        <h1>Player Data</h1>
        <a href="insert_player.php">Insert Player</a><br><br>
        <table align="center" border="1" class="table2">
                    <tr>
                        <th>Jersey Number</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Country</th>
                        <th>Age</th>
                        <th>Height</th>
                        <th>Weight</th>
                        <th>Player Photo</th>
                        <th>Action</th>
                    </tr>
                <?php 
                    $query = "SELECT * FROM `pemain`";
                    $result = mysqli_query($koneksi,$query);

                    while($data_user = mysqli_fetch_array($result)){
                        $no_punggung = $data_user['no_punggung'];
                        $nama = $data_user['nama'];
                        $role= $data_user['role'];
                        $negara= $data_user['negara'];
                        $umur = $data_user['umur'];
                        $tinggibadan = $data_user['tinggibadan'];
                        $beratbadan = $data_user['beratbadan'];
                        $foto = $data_user['foto'];
                        echo "
                            <tr>
                                <td>$no_punggung</td>
                                <td>$nama</td>
                                <td>$role</td>
                                <td>$negara</td>
                                <td>$umur</td>
                                <td>$tinggibadan</td>
                                <td>$beratbadan</td>
                                <td><img src='$foto' width='250px' height='170px' ></td>
                                <td>
							    <a href='update_player.php?editid=$no_punggung'> Edit </a> | 
							    <a href='delete_player.php?editid=$no_punggung'> Hapus </a>
						        </td>
                            </tr>";
                    }
                ?>  
                </table>
                <br>
                <br>
                <br>
    </div>
    </div>
</body>
</html>