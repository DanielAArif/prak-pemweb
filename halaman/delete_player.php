<?php
	include 'koneksi.php';
	
	$no_punggung = $_GET['editid'];
	if($no_punggung!=''){
		$row = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from pemain where no_punggung = '$no_punggung'"));
		$filegambar = $row['foto'];
		unlink($filegambar);
		$hapus = "DELETE from pemain where no_punggung = '$no_punggung'";
		$query = mysqli_query($koneksi, $hapus);
		if($query){
			echo "berhasil menghapus pemain";
            header("Location: view_player&pemain.php");
            exit;
        }else {
            echo "gagal menghapus pemain";
        }
	}
?>