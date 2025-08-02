<?php
   $name = "sathiya";
   $food = "briyani";
   $email = "food@gmail.com";
   $age = 21;
   $user = 2;
   $quantity = 4;
   $price =200;

   // boolean  //
   $online = true;
   $offline= false;

//total//
echo" food:{$food},<br>Quantity:{$quantity}<br>";
$total = $quantity * $price;
echo"total amount:{$total}<br>";


// boolean value // 1="true, 0=false
echo"user in online:{$online}<br>";
echo "user in offline:{$offline}";

?>