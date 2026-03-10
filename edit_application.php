<?php
require 'db.php';

$id = $_GET['id'];

$app = $db->prepare("SELECT * FROM applications WHERE id=?");
$app->execute([$id]);
$data = $app->fetch();

if(isset($_POST['update'])){
    $update = $db->prepare("UPDATE applications SET status=? WHERE id=?");
    $update->execute([$_POST['status'],$id]);
    header("Location: applications.php");
}
?>

<h2>Edit Status</h2>

<form method="post">
<select name="status">
<option>Pending</option>
<option>Approved</option>
<option>Rejected</option>
</select><br><br>
<button name="update">Update</button>
</form>