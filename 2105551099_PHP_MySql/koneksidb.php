<?php

$con = mysqli_connect("localhost","root","","prodi2105551099");
if (mysqli_connect_errno())
  {
  echo "Gagal Melakukan Koneksi Ke MySql" . mysqli_connect_error();
  }
?>