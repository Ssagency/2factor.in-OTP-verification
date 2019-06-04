<div id="order-form" class="otp-verification">
  <div class="error"></div>
  <form id="frm-mobile-verification">



    <div class="form-row">
     <input id="name" type="text" name="name" class="text" value="" placeholder="Name" required="">
   </div>

   <div class="form-row">
     <input class="text" id="email" type="email" name="email" value="" placeholder="Email" required="">
   </div>

   <div class="form-row">
    <input type="number" id="mobile" class="form-input"
    placeholder="Enter the 10 digit mobile">
  </div>

  <input type="button" class="btnSubmit" value="Send OTP"
  onClick="sendOTP();">
</form>

</div>