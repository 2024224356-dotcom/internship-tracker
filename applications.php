<?php
include "includes/auth.php";
?>

<!DOCTYPE html>
<html>
<head>

<title>Applications</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link rel="stylesheet"
href="css/style.css">

</head>

<body>

<?php include "includes/navbar.php"; ?>

<div class="container mt-4">

<div class="card p-4">

<h3>Internship Applications</h3>

<table class="table table-dark mt-3">

<tr>

<th>Company</th>
<th>Position</th>
<th>Date</th>
<th>Status</th>

</tr>

<tr>
<td>Maybank</td>
<td>IT Support Intern</td>
<td>12 May 2026</td>
<td>Applied</td>
</tr>

<tr>
<td>Petronas Digital</td>
<td>Web Developer Intern</td>
<td>15 May 2026</td>
<td>Interview</td>
</tr>

<tr>
<td>Telekom Malaysia</td>
<td>Front-End Intern</td>
<td>18 May 2026</td>
<td>Interview</td>
</tr>

<tr>
<td>AirAsia MOVE</td>
<td>UI/UX Intern</td>
<td>20 May 2026</td>
<td>Applied</td>
</tr>

<tr>
<td>Tenaga Nasional</td>
<td>Information Systems Intern</td>
<td>22 May 2026</td>
<td>Accepted</td>
</tr>

</table>

</div>
</div>

<?php include "includes/footer.php"; ?>

</body>
</html>