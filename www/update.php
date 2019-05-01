<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $id=$_POST['id'];
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $jurusan=$_POST['jurusan'];
 $alamat=$_POST['alamat'];
 $q=mysqli_query($con,"UPDATE `mahasiswa` SET `id`='$id',`nim`='$nim',`nama`='$nama',`jurusan`='$jurusan',`alamat`='$alamat' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>