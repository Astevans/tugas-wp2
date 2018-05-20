
<?php
// Load file koneksi.php
include"./pengaturan/koneksi.php"; //memanggil koneksi dg cara, naik 1 folder, lalu masuk folder pengaturan
include"./fungsi/fungsi.php"; //memanggil fungsi dg cara, naik 1 folder, lalu masuk folder fungsi
// Ambil Data yang Dikirim dari Form
$nik           = $_POST['nik'];
$nama          = $_POST['nama'];
$jk            = $_POST['jk'];
$divisi        = $_POST['divisi'];
$tmp_lhr       = $_POST['tmp_lhr'];
$tgl_lhr       = $_POST['tgl_lhr'];
$gol_darah     = $_POST['gol_darah'];
$agama         = $_POST['agama'];
$status        = $_POST['status'];
$telp          = $_POST['telp'];
$email         = $_POST['email'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "gambar/".$fotobaru;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO karyawan2  VALUES('".$nik."', '".$nama."', '".$jk."', '".$divisi."', '".$tmp_lhr."', '".$tgl_lhr."', '".$gol_darah."', '".$agama."', '".$status."', '".$telp."', '".$email."', '".$fotobaru."')";
  $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    msgbox ("Data Berhasil Tersimpan");
    header("location: dashboard_admin.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='input_data_karyawan.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='input_data_karyawan.php'>Kembali Ke Form</a>";
}
?>