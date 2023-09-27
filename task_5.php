<?php
function generatePassword($length){
    $random_characters = 3;
   $lower_case = "abcdefghijklmnopqrstuvwxyz";
   $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
   $numbers = "1234567890";
   $symbols = "!@#$%^&*()_+";
 
   $lower_case = str_shuffle($lower_case);
   $upper_case = str_shuffle($upper_case);
   $numbers = str_shuffle($numbers);
   $symbols = str_shuffle($symbols);
 
   $random_password = substr($lower_case, 0, $random_characters);
   $random_password .= substr($upper_case, 0, $random_characters);
   $random_password .= substr($numbers, 0, $random_characters);
   $random_password .= substr($symbols, 0, $random_characters);
 
   return substr(str_shuffle($random_password), 0, $length);
}
echo generatePassword(12);
