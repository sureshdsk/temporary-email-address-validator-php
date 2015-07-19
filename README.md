# Temporary / Disposable Email Address Validator for php
As a owner or web master you wouldn’t really want someone anonymously utilizing your website or campaign benefits. So You really want to prevent using temporary email addresses on website. So this PHP Class was created in an attempt to make a collection of disposable email addresses and validate signups against with the list of temporary email providers.

# Example
```
// Disposable Email Address Validator
require_once('DisposableEmail.class.php');
$obj = new DisposableEmails();
$result = $obj->validate("dsk@zomg.info");
if($result){
    echo "Alert !! Disposable Email!";
}else{
    echo "OK";
}
```

# Documentation
[Temporary Email Address Validator](http://www.idiotinside.com/disposable-temporary-email-address-validation/)

# Looking for Javascript / Python / Node.js version of this plugin?
[Temporary Email Address Validator](http://www.idiotinside.com/disposable-temporary-email-address-validation/)