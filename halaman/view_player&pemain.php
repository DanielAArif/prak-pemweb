<?php
    include("koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>halaman-index</title>
</head>
<body>
    <h2 align="center">DATA USER</H2>
        <h2>
            <form action="index.php" method="POST">
                <table align="center" border="">
                    <tr>
                        <th> name </th>
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
                        echo '<tr>
                                <td>' .$id. '</td>
                                <td>' .$username. '</td>
                                <td>' .$email. '</td>
                                <td>' .$password. '</td>
                              </tr>';
                    }
                ?>  
                </table>
            </form>
        </h2>
        <h2 align="center">DATA PEMAIN</H2>
        <h2>
            <form action="index.php" method="POSTS">
                <table align="center" border="">
                    <tr>
                        <th> No punggung </th>
                        <th> nama </th>
                        <th> posisi </th>
                        <th> negara </th>
                        <th> umur </th>
                        <th> tinggi badan</th>
                        <th> berat badan </th>
                        <th> foto </th>
                    </tr>
                <?php 
                    $query = "SELECT * FROM `pemain`";
                    $result = mysqli_query($koneksi,$query);

                    while($data_user = mysqli_fetch_assoc($result)){
                        $no_punggung = $data_user['no_punggung'];
                        $nama = $data_user['nama'];
                        $role= $data_user['role'];
                        $negara= $data_user['negara'];
                        $umur = $data_user['umur'];
                        $tinggibadan = $data_user['tinggibadan'];
                        $beratbadan = $data_user['beratbadan'];
                        $foto = $data_user['foto'];
                        echo '<tr>
                                <td>' .$no_punggung. '</td>
                                <td>' .$nama. '</td>
                                <td>' .$role. '</td>
                                <td>' .$negara. '</td>
                                <td>' .$umur. '</td>
                                <td>' .$tinggibadan. '</td>
                                <td>' .$beratbadan. '</td>
                                <td>' .$foto. '</td>
                              </tr>';
                    }
                ?>  
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="insert_player.php"> Menambah data </a></td>
                    </tr>
                </table>
            </form>
            <a href="logout.php">Logout</a>
        </h2>
</body>
</html>