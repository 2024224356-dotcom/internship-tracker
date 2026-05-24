<?php
include "includes/auth.php";
?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link rel="stylesheet"
href="css/style.css">

</head>

<body>

<?php include "includes/navbar.php"; ?>

<div class="container mt-4">

<div class="mb-4">

<h2>
Welcome back, Student 👋
</h2>

<p class="text-secondary">

Monitor internship applications,
track interviews,
and manage your preparation.

</p>

</div>

<div class="container mt-4">

<div class="row">

<div class="col-md-3">

<div class="card summary-card">

<div class="summary-number">08</div>

<div class="summary-label">

Applications Submitted

</div>

</div>
</div>

<div class="col-md-3">

<div class="card summary-card">

<div class="summary-number">03</div>

<div class="summary-label">

Interview Selected

</div>

</div>
</div>

<div class="col-md-3">

<div class="card summary-card">

<div class="summary-number">01</div>

<div class="summary-label">

Accepted Offers

</div>

</div>
</div>

<div class="col-md-3">

<div class="card summary-card">

<div class="summary-number">12</div>

<div class="summary-label">

Tasks Completed

</div>

</div>
</div>

</div>

<div class="card mt-4 p-4">

<h4 class="mb-3">

Application Status Overview

</h4>

<canvas id="dashboardChart"></canvas>

</div>

</div>

<?php include "includes/footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="js/chart.js"></script>

<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>