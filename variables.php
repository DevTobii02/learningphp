<?php
   // variable is a reuseable container that holds data strings, integer, float, boolean 


   //Strings Datatype
   $name = "Fred";
   $email = "fred21@yahoo.com";
   $food = "Mozarella";
   echo "Hello your name is ? : {$name} <br>";
   echo "and your best food is {$food} <br>";
   echo "your email is {$email} <br>"; 

   //Integer
   $age = 21;
   $users = 100;
   $quantity = 50;
   echo "You are {$age} years old <br>";
   echo "there are {$users} users online <br>";
   echo "i would like to get {$quantity} items<br>";  

   //Float
   //Numbers that can contain decimal point portion
   $gpa = 3.5;
   $price = 4.55;
   $tax_rate = 7.5;
   echo "your gpa is : {$gpa} <br>";
   echo "the price of the pizza is : \${$price} <br>";
   echo "the new vat tax rate is: {$tax_rate}% <br>";

   //Booleans
   //Either true or false
   $isEmployed = true;
   $isOnline = true;
   $hasCar = false;
   $hasMoney = false;

   echo "Are you online ?: {$isEmployed}<br>";

   //mix and matching of variables
   $order = "Pizza";
   $quantity = 5;
   $price = 7.55;
   echo "You have your order of {$quantity} {$order}s <br>";
   $total = $quantity * $price;
   echo "Your total is : \${$total};"

?>