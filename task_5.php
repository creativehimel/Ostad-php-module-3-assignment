<?php
function generatePassword($length){
    $data = "0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()_+ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    return substr(str_shuffle($data), 0, $length);
}
echo generatePassword(12);