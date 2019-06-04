<div class="error"></div>
<form id="frm-order" action="checkout.php" name="order" method="post">
  <form id="frm-order" action="" name="order" method="post">

    <input id='utm_medium_ok' type='hidden' name="utm_medium_ok" value='<?php echo $utm_medium; ?>' style="display: none;" readonly>
    <input id='utm_source_ok' type='hidden' name="utm_source_ok" value='<?php echo $utm_source; ?>' style="display: none;" readonly>
    <input id='utm_campaign_ok' type='hidden' name="utm_campaign_ok" value='<?php echo $utm_campaign; ?>' style="display: none;" readonly>


    <div class="form-row">
      <label>Mobile Number verified!</label>

    </div>

    <div class="form-row">
     <input id="name" type="text" name="name" class="text" value="<?php echo $customer_name; ?>" readonly>
   </div>

   <div class="form-row">
     <input class="text" id="email" type="email" name="email" value="<?php echo $customer_email; ?>" readonly>
   </div>

   <div class="form-row">
    <input type="number" id="mobile" class="form-input" name="mobile" value="<?php echo $mobile_number; ?>" readonly>
  </div>

<input type="submit" class="btnSubmit" value="PLACE YOUR ORDER">

</form>

