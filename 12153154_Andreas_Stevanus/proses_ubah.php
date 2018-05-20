<?php
// Load file koneksi.php
include"./pengaturan/koneksi.php"; //memanggil koneksi dg cara, naik 1 folder, lalu masuk folder pengaturan
include"./fungsi/fungsi.php"; //memanggil fungsi dg cara, naik 1 folder, lalu masuk folder fungsi

// Ambil data NIk yang dikirim oleh form_ubah.php melalui URL
$nik = $_GET['nik'];
// Ambil Data yang Dikirim dari Form
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
// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
  // Ambil data foto yang dipilih dari form
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  
  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $fotobaru = date('dmYHis').$foto;
  
  // Set path folder tempat menyimpan fotonya
  $path = "gambar/".$fotobaru;
  // Proses upload
  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data siswa berdasarkan NIk yang dikirim
    $query = "SELECT * FROM karyawan2 WHERE nik='".$nik."'";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("gambar/".$data['foto'])) // Jika foto ada
      unlink("gambar/".$data['foto']); // Hapus file foto sebelumnya yang ada di folder images
    
    // Proses ubah data ke Database
    $query = "UPDATE karyawan2 SET nama='".$nama."', jk='".$jk."', divisi='".$divisi."', tmp_lhr='".$tmp_lhr."', tgl_lhr='".$tgl_lhr."', gol_darah='".$gol_darah."', agama='".$agama."', status='".$status."', telp='".$telp."', email='".$email."', foto='".$fotobaru."' WHERE nik='".$nik."'";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
       msgbox ("Data Berhasil Dirubah");
      header("location: dashboard_admin.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='ubah_data.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='ubah_data.php'>Kembali Ke Form</a>";
  }
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
  // Proses ubah data ke Database
  $query =mysqli_query($koneksi,  "UPDATE karyawan2 SET nama='$nama', jk='$jk', divisi='$divisi', tmp_lhr='$tmp_lhr', tgl_lhr='$tgl_lhr', gol_darah='$gol_darah', agama='$agama', status='$status', telp='$telp', email='$email' WHERE nik='$nik' ");
 // Eksekusi/ Jalankan query dari variabel $query
  if($query){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
     msgbox ("Data Berhasil Dirubah");
    header("location: dashboard_admin.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='ubah_data.php'>Kembali Ke Form</a>";
  }
}
?>