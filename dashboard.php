<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Internship Management System</title>

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
overflow-x:hidden;
}

/* ===== PREMIUM NAVBAR ===== */

.navbar{
background:rgba(0,0,0,0.35);
backdrop-filter:blur(12px);
padding:16px 40px;
display:flex;
justify-content:space-between;
align-items:center;
box-shadow:0 10px 25px rgba(0,0,0,0.3);
}

.navbar h1{
font-size:22px;
font-weight:600;
}

.navbar a{
color:white;
text-decoration:none;
margin-left:20px;
font-size:15px;
transition:0.3s;
}

.navbar a:hover{
color:#00e0ff;
transform:translateY(-2px);
}

/* ===== MAIN CONTAINER ===== */

.container{
max-width:900px;
margin:60px auto;
padding:20px;
}

/* ===== GLASS CARD ===== */

.card{
background:rgba(255,255,255,0.08);
backdrop-filter:blur(15px);
border-radius:14px;
padding:35px;
box-shadow:0 25px 60px rgba(0,0,0,0.35);
animation:fadeIn 0.9s ease;
transition:0.3s;
}

.card:hover{
transform:translateY(-6px);
}

/* ===== FORM INPUT ===== */

input,select{
width:100%;
padding:12px;
margin-top:10px;
margin-bottom:18px;
border:none;
border-radius:6px;
background:rgba(255,255,255,0.15);
color:white;
outline:none;
font-size:14px;
transition:0.3s;
}

input::placeholder{
color:#ddd;
}

input:focus,select:focus{
background:rgba(255,255,255,0.25);
}

/* ===== BUTTON ===== */

button{
background:#00e0ff;
border:none;
padding:12px 20px;
border-radius:6px;
font-weight:600;
cursor:pointer;
transition:0.3s;
color:black;
}

button:hover{
background:#00bcd4;
transform:scale(1.05);
box-shadow:0 0 20px rgba(0,224,255,0.6);
}

/* ===== TABLE ===== */

table{
width:100%;
margin-top:20px;
border-collapse:collapse;
}

table th{
background:rgba(0,0,0,0.4);
padding:10px;
}

table td{
padding:10px;
text-align:center;
background:rgba(255,255,255,0.08);
}

/* ===== ACTION LINKS ===== */

.action{
color:#00e0ff;
text-decoration:none;
margin:0 6px;
}

.action:hover{
text-decoration:underline;
}

/* ===== ANIMATIONS ===== */

@keyframes fadeIn{
from{
opacity:0;
transform:translateY(25px);
}
to{
opacity:1;
transform:translateY(0);
}
}

/* ===== RESPONSIVE ===== */

@media(max-width:768px){

.navbar{
flex-direction:column;
gap:10px;
}

.container{
margin-top:30px;
}

}

</style>

</head>

<body>

<!-- NAVBAR -->

<div class="navbar">

<h1>Internship Portal</h1>

<div>
<a href="dashboard.php">Dashboard</a>
<a href="add_application.php">Add Application</a>
<a href="applications.php">Applications</a>
<a href="logout.php">Logout</a>
</div>

</div>


<!-- MAIN CONTENT -->

<div class="container">

<div class="card">


<h2>Add Internship Application</h2>

<form method="post">

<label>Student Name</label>
<input type="text" name="student_name" placeholder="Enter student name" required>

<label>Email</label>
<input type="email" name="email" placeholder="Enter email" required>

<label>Domain</label>
<select name="domain" required>
<option>Web Development</option>
<option>AI & ML</option>
<option>Cloud Computing</option>
<option>Data Science</option>
</select>

<button type="submit" name="add">Submit Application</button>

</form>

</div>

</div>

</body>
</html>