<!DOCTYPE html>
<html>
<head>
	<title>OTP SMS Mobile Verification</title>
	<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>

	<?php
	$utm_medium = $_GET['utm_medium'];
	$utm_source = $_GET['utm_source'];
	$utm_campaign = $_GET['utm_campaign'];
	?>

	<input id='utm_medium' type='hidden' name="utm_medium" value='<?php echo $utm_medium; ?>' style="display: none;" readonly>
	<input id='utm_source' type='hidden' name="utm_source" value='<?php echo $utm_source; ?>' style="display: none;" readonly>
	<input id='utm_campaign' type='hidden' name="utm_campaign" value='<?php echo $utm_campaign; ?>' style="display: none;" readonly>

	<div class="container">

		<?php include("form.php");?>

	</div>

	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/verification.js" type="text/javascript"></script>
</body>
</html>