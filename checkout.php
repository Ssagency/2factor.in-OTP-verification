<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>

    <form>

        <?php
        $first_name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $utm_medium = $_POST['utm_medium_ok'];
        $utm_source = $_POST['utm_source_ok'];
        $utm_campaign = $_POST['utm_campaign_ok'];
        ?>

        <input id='utm_medium_ok' type='hidden' name="utm_medium" value='<?php echo $utm_medium; ?>' readonly>
        <input id='utm_source_ok' type='hidden' name="utm_source" value='<?php echo $utm_source; ?>' readonly>
        <input id='utm_campaign_ok' type='hidden' name="utm_campaign" value='<?php echo $utm_campaign; ?>' readonly>

        <label>Checkout</label>

        <div class="form-row">
            <label>Name:</label>
        </div>
        <div class="form-row">
            <input id='name' type='text' name="name" value='<?php echo $first_name; ?>' readonly>
        </div>
        <div class="form-row">
            <label>Phone:</label>
        </div>
        <div class="form-row">
            <input id='mobile' type='text' name="mobile" value='<?php echo $mobile; ?>' readonly>
        </div>
        <div class="form-row">
            <label>Email:</label>
        </div>
        <div class="form-row">
            <input id='email' type='text' name="email" value='<?php echo $email; ?>' readonly>
        </div>
    </form>



</body>
</html>