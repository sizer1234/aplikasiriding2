<?php
$host ="127.0.0.1";
$user ="root";
$pass ="";
$debe ="data_base_anggota";

$db = new mysqli($host,$user,$pass,$debe)or die($db->error);
?>