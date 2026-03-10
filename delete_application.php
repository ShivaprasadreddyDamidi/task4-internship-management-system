<?php
require 'db.php';

$id = $_GET['id'];

$del = $db->prepare("DELETE FROM applications WHERE id=?");
$del->execute([$id]);

header("Location: applications.php");