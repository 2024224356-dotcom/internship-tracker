<?php
include "includes/auth.php";
?>

<!DOCTYPE html>
<html>
<head>

<title>Tasks</title>

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

<h3>Internship Tasks</h3>

<table class="table table-dark mt-3">

<tr>
<th>Task</th>
<th>Deadline</th>
<th>Status</th>
</tr>

<tr>
<td>Prepare internship resume</td>
<td>Monday</td>
<td>Done</td>
</tr>

<tr>
<td>Update LinkedIn profile</td>
<td>Tuesday</td>
<td>Done</td>
</tr>

<tr>
<td>Attend Petronas interview</td>
<td>Wednesday</td>
<td>In Progress</td>
</tr>

<tr>
<td>Submit portfolio website</td>
<td>Thursday</td>
<td>Pending</td>
</tr>

<tr>
<td>Follow up with HR</td>
<td>Friday</td>
<td>Pending</td>
</tr>

</table>

</div>
</div>

<?php include "includes/footer.php"; ?>

</body>
</html>