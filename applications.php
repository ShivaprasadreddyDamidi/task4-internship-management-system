<?php
session_start();
require 'db.php';

if(!isset($_SESSION['admin'])){
header("Location: login.php");
exit();
}

$data = $db->query("SELECT * FROM applications")->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
<title>Applications</title>

<style>

/* ===== GLOBAL ===== */

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

body{
background:linear-gradient(135deg,#1e3c72,#2a5298);
min-height:100vh;
color:white;
}

/* ===== NAVBAR ===== */

.navbar{
background:rgba(0,0,0,0.35);
backdrop-filter:blur(12px);
padding:16px 40px;
display:flex;
justify-content:space-between;
align-items:center;
}

.navbar a{
color:white;
text-decoration:none;
margin-left:20px;
}

/* ===== CONTAINER ===== */

.container{
max-width:900px;
margin:60px auto;
padding:20px;
}

.card{
background:rgba(255,255,255,0.08);
backdrop-filter:blur(15px);
border-radius:12px;
padding:30px;
}

/* ===== TABLE ===== */

table{
width:100%;
border-collapse:collapse;
margin-top:20px;
}

table th{
background:rgba(0,0,0,0.4);
padding:10px;
}

table td{
padding:10px;
background:rgba(255,255,255,0.08);
text-align:center;
}

</style>

</head>

<body>

<div class="navbar">
<h1>Internship Portal</h1>

<div>
<a href="dashboard.php">Dashboard</a>
<a href="add_application.php">Add Application</a>
<a href="applications.php">Applications</a>
<a href="logout.php">Logout</a>
</div>
</div>

<div class="container">
<div class="card">

<h2>Applications</h2>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Domain</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php foreach($data as $row){ ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['student_name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['domain']; ?></td>
<td><?php echo $row['status']; ?></td>

<td>
<a href="edit_application.php?id=<?php echo $row['id']; ?>">Edit</a> |
<a href="delete_application.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Delete this record?')">Delete</a>
</td>

</tr>

<?php } ?>

</table>

</div>
</div>

</body>
</html>