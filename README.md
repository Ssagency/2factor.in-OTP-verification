# OTP verification

One Time Password verification for 2factor.in
Verify India 10 digit mobile phone numbers by sending SMS to user with 6 digit random code.

## Instructions

* Get API key at: https://2factor.in/CP/register.php
* Insert api key in controller.php line 8

* controller.php - processing our API call, all functionality is there
* js/verification.js - control of user data input and AJAX request to process controller.php

* IMPORTANT - For development purpose only we show OTP number which is sent to phone number. Please delete lines 60 to 63 in controller.php when you are ready for Production.


## Used API

* [API provider](https://2factor.in) - 2 Factor
* [API documentation](https://2fa.api-docs.io/v1/getting-started-with-2factor-api) - 2 Factor

## Used tech

* PHP
* JS
* jQuery
* AJAX

## Features

* Verify phone number with OTP password sent to phone
* Forward user Name, Phone and mail to checkout page
* BONUS forward url parameters from index.php usefull for add campaings tracking
Sample: yoururl.com/index.php?utm_source=testsource&utm_medium=testmedium&utm_campaign=testcampaing
On checkout page data is in hidden input field ;)