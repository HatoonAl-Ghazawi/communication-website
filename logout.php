<?php
//Hatoon Code

//end [MOBILE_NUM] cookie
$name = "mobile_number";
$value = null;
 $expire = time()- 60*60*24*7;
setcookie($name, $value, $expire);

//end [SUBSCRIBE_TYPE] cookie
 $name = "subscribe_type";
 $value = null;
 $expire = time()- 60*60*24*7;
 setcookie($name, $value, $expire);

//end [USER] cookie
 $name = "user";
 $value = 'user';
 $expire = time()- 60*60*24*7;
 setcookie($name, $value, $expire);
 
//end [LOGIN] cookie
 $name = "login";
 $value = 0;
 $expire = time()+ 60*60*24*7;
 setcookie($name, $value, $expire);

 //end [RECHARGE_CARD_PRICE]cookie 
 $name = "recharge_card_price";
 $value = null;
 $expire = time()- 60*60*24*7;
 setcookie($name, $value, $expire);

 //end [TAX] cookie
 $name = "tax";
 $value = null;
 $expire = time()- 60*60*24*7;
 setcookie($name, $value, $expire);

 //end[CREDIT] cookie
 $name = "customer_credit";
 $value = null;
 $expire = time()- 60*60*24*7;
 setcookie($name, $value, $expire);

?>