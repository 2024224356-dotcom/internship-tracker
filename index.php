<?php
session_start();

$error = "";

$validUser = "student";
$validPass = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $validUser && $password == $validPass) {

        $_SESSION["user"] = $username;

        header("Location: dashboard.php");
        exit();

    } else {

        $error = "Invalid username or password";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Internship Tracker</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-5">

<div class="card p-4">

<h2 class="text-center">Internship Tracker</h2>

<p class="text-center text-secondary">
Track your internship journey
</p>

<?php if($error): ?>

<div class="alert alert-danger">

<?= $error ?>

</div>

<?php endif; ?>

<form method="POST">

<div class="mb-3">

<label>Username</label>

<input
name="username"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Password</label>

<input
type="password"
name="password"
class="form-control"
required>

</div>

<button class="btn btn-primary w-100">

Login

</button>

</form>

<p class="mt-3 text-center">

<a href="register.php">

Register here

</a>

</p>

</div>
</div>
</div>
</div>
</div>

</body>
</html>