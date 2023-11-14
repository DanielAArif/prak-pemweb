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