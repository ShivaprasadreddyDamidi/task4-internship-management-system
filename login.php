<?php
session_start();

$admin_user = "admin";
$admin_pass = "12345";

if(isset($_POST['login'])){
    if($_POST['username']==$admin_user && $_POST['password']==$admin_pass){
        $_SESSION['admin']="true";
        header("Location: dashboard.php");
    } else {
        $error="Invalid Credentials";
    }
}
?>

<h2>Admin Login</h2>

<?php if(isset($error)) echo $error; ?>

<form method="post">
<input name="username" placeholder="Username" required><br><br>
<input type="password" name="password" placeholder="Password" required><br><br>
<button name="login">Login</button>
</form>