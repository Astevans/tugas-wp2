<?php
include"./pengaturan/koneksi.php"; //memanggil koneksi dg cara, naik 1 folder, lalu masuk folder pengaturan
include"./fungsi/fungsi.php"; //memanggil fungsi dg cara, naik 1 folder, lalu masuk folder fungsi
$username = $_POST['username'];
$password = md5($_POST['password']); //engencrypssi password
$login  = mysqli_query($koneksi, "SELECT * from admin where username='$username' and password='$password'"); //menocokan data yang diinput dengan data yang ada di tabel
$row = mysqli_fetch_array($login);
if ($row['username'] == $username AND $row['password'] == $password)
{
		session_start();
		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['password'];
		header('location:dashboard_admin.php');
}
else
{
	msgbox ("Gagal Login","./");
}
?>
