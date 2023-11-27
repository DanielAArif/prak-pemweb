<?php
    include("koneksi.php");
    session_start();

    if(isset($_POST['submit'])){
        $no_punggung = $_POST['no_punggung'];
        $nama = $_POST['nama'];
        $role= $_POST['role'];
        $negara= $_POST['negara'];
        $umur = $_POST['umur'];
        $tinggibadan = $_POST['tinggibadan'];
        $beratbadan = $_POST['beratbadan'];
        $uploaddir = 'gambar/gambarpemain/';
        $uploadname = $_FILES['foto']['nama'];
        $uploadtmp = $_FILES['foto']['tmp_name'];
        //$foto = $_FILES[' ']

        $query = "INSERT INTO pemain(no_punggung, nama, role, negara, umur, tinggibadan, beratbadan, foto) VALUES ('$no_punggung','$nama','$role','$negara','$umur','$tinggibadan','$beratbadan','$foto')";
        $result = mysqli_query($koneksi, $query);
        if($result){
            header("Location: view_player&pemain.php");
            exit;
        }else {
            echo "gagal Menambahkan user";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>   
</head>
<body>
    <div class="box">
        <h2>insert data pemain</h2>
        <form name="formPendaftaran" method="POST" onsubmit="return validateForm()">
        <div class="input-box">
                <p>no punggung  :  <input type="text" name="no_punggung" placeholder="no punggung" ></p>
            </div>
            <div>
                <p>nama : <input type="text" name="nama" placeholder="nama" ></p>
            </div>
            <div>
                <p>posisi : <input type="text" name="role" placeholder="posisi"></p>
            </div>
            <div>
                <p> negara : <input type="text" name="negara" placeholder="negara"></p>
            </div>
            <div>
                <p> umur : <input type="text" name="umur" placeholder="umur"></p>
            </div>
            <div>
                <p> tinggi badan : <input type="text" name="tinggibadan" placeholder="tinggibadan"></p>
            </div>
            <div>
                <p> berat badan : <input type="text" name="beratbadan" placeholder="beratbadan"></p>
            </div>
            <div>
                <p> foto pemain : <input type="file" name="foto"  ></p>
            </div>
            <div>
                <button type="submit" name="submit">submit</button>
            </div>
            <p>balik ke tabel data <a href="view_player&pemain.php" style="color: #BE3144; text-decoration: none;">back</a></p>
        </form>        
    </div>
    <!-- <script>
        function validateForm() {
            if (document.forms["formPendaftaran"]["username"].value == "") {
                alert("Username Tidak Boleh Kosong");
                document.forms["formPendaftaran"]["username"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["email"].value == "") {
                alert("Email Tidak Boleh Kosong");
                document.forms["formPendaftaran"]["email"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["password"].value == "") {
                alert("Password Tidak Boleh Kosong");
                document.forms["formPendaftaran"]["password"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["confirm_password"].value == "") {
                alert("Konfirmasi Password Tidak Boleh Kosong");
                document.forms["formPendaftaran"]["confirm_password"].focus();
                return false;
            }
            if(document.forms["formPendaftaran"]["password"].value != document.forms["formPendaftaran"]["confirm_password"].value){
                alert("Password Tidak Sama");
                document.forms["formPendaftaran"]["confirm_password"].focus();
                return false;
            }
        }
    </script> -->
</body>
</html>