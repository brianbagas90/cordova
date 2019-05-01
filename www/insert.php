<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $id=$_POST['id'];
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $jurusan=$_POST['jurusan'];
 $alamat=$_POST['alamat'];
 $q=mysqli_query($con,"INSERT INTO `mahasiswa` (`id`,`nim`,`nama`,`jurusan`,`alamat`) VALUES ('$id','$nim','$nama','$jurusan','$alamat')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>