<?php 
require 'function.php';
$id = $_GET['id'];
if (hapus($id) > 0) {
header('Location: index.php');}

?>