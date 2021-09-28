<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'klinik';

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('koneksi gagal');
