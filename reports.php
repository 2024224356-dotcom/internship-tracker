<?php
include "includes/auth.php";
?>

<!DOCTYPE html>
<html>
<head>

<title>Reports</title>

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

<h3>Application Report</h3>

<canvas id="dashboardChart"></canvas>

</div>
</div>

<?php include "includes/footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="js/chart.js"></script>

</body>
</html>