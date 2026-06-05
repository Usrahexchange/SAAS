<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container dashboard">

<?php if(isset($_SESSION['success'])): ?>

<div class="success">
<?php
echo htmlspecialchars($_SESSION['success']);
unset($_SESSION['success']);
?>
</div>

<?php endif; ?>

<h1>Farmer Dashboard</h1>

<div class="card">
<h3>Profile Overview</h3>

<p>
Farmer ID:
<?php echo htmlspecialchars($farmers[0]['id']); ?>
</p>

<p>
Verification:
<?php echo htmlspecialchars($farmers[0]['status']); ?>
</p>

<p>
Coordinates:
<?php echo htmlspecialchars($farmers[0]['coordinates']); ?>
</p>
</div>

<br>

<div class="metrics">

<div class="metric">
<h2>₦500,000</h2>
<p>Active Financing</p>
</div>

<div class="metric">
<h2>12 Hectares</h2>
<p>Farm Size</p>
</div>

<div class="metric">
<h2>36 Tons</h2>
<p>Predicted Yield</p>
</div>

<div class="metric">
<h2>15 Aug 2026</h2>
<p>Next Repayment</p>
</div>

</div>

<div class="weather">
<h3>NiMet Weather Intelligence</h3>

<p>Temperature:
<?php echo $weather['temperature']; ?></p>

<p>Rainfall:
<?php echo $weather['rainfall']; ?></p>

<p>Soil:
<?php echo $weather['soil']; ?></p>

<p><strong>Alert:</strong>
<?php echo $weather['warning']; ?></p>

</div>

<?php if(isset($_SESSION['application'])): ?>

<div class="card" style="margin-top:20px;">
<h3>Latest Application</h3>

<p>
Applicant:
<?php echo htmlspecialchars($_SESSION['application']['name']); ?>
</p>

<p>
Crop:
<?php echo htmlspecialchars($_SESSION['application']['crop']); ?>
</p>

<p>
Financing:
<?php echo htmlspecialchars($_SESSION['application']['finance']); ?>
</p>

<p>
Calculated Amount:
₦<?php echo htmlspecialchars($_SESSION['application']['amount']); ?>
</p>

</div>

<?php endif; ?>

<h2 style="margin-top:30px;">Applications</h2>

<table>

<tr>
<th>Amount</th>
<th>Model</th>
<th>Status</th>
</tr>

<?php foreach($logs as $log): ?>

<tr>

<td><?php echo htmlspecialchars($log['request']); ?></td>

<td><?php echo htmlspecialchars($log['model']); ?></td>

<td>

<span class="badge
<?php echo strtolower($log['status']); ?>">

<?php echo htmlspecialchars($log['status']); ?>

</span>

</td>

</tr>

<?php endforeach; ?>

</table>

</div>

</body>
</html>
