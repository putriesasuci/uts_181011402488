<?php
include 'koneksi.php';
 
// menyimpan data kedalam variabel
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$wilayah        = $_POST['wilayah'];
$positif        = $_POST['positif'];
$dirawat        = $_POST['dirawat'];
$sembuh         = $_POST['sembuh'];
$meninggal      = $_POST['meninggal'];
if($nim=="")
{
  // echo "NIM kosong belum diisi, ";
  echo "<script>alert('NIM Belum diisi');history.go(-1);</script>";
}
 
if($nama=="")
{
  echo "<script>alert('Nama Belum diisi');history.go(-1);</script>";
}
 
/* cek input NIM apakah sudah ada nim yang digunakan */
   $pilih="select * from datacovid where nim_mhs='$nim'";
   $cek=mysqli_query($koneksi, $pilih);
 
   $jumlah_data = mysqli_num_rows($cek);
   if ($jumlah_data >= 1 ) 
   {
 
  echo "<script>alert('NIM yang sama sudah digunakan');history.go(-1);</script>";
    }
   else
{
 
// query untuk insert data covid
   $query="INSERT INTO db_covid SET  nim_mhs='$nim',nama_operator='$nama',wilayah='$wilayah',jml_positif='$positif',jml_dirawat='$dirawat',jml_sembuh='$sembuh',jml_meninggal='$meninggal'";
mysqli_query($koneksi, $query);
 
// echo " Input Data yang anda masukkan sukses berhasil";
// header("location:query.php");
 
echo "<script>alert('Data yang anda Input sukses');window.location='query.php'</script>";
    }
 
?>