<?php

/*IsValid("") // false  
IsValid("aa") // false  
IsValid("ab") // false  
IsValid("AAAbbbCc") // false  
IsValid("AbTp9!foo") // false  
IsValid("AbTp9!foA") // false
IsValid("AbTp9 fok") // false
IsValid("AbTp9!fok") // true
*/

$password = isset($_POST['password']) ? $_POST['password'] : ''; 

$uppercase = preg_match('@[A-Z]@', $password);
$space = preg_match('@[ ]@',$password);
$lowercase = preg_match('@[a-z]@', $password);
$number = preg_match('@[0-9]@', $password);
$special_caracter = preg_match('/^(?=.*[!@#$%^&-])/', $password);

$input = str_split($password);

$result = array_unique($input);



if (!$uppercase || $space || !$lowercase || !$number || !$special_caracter || !(implode($input) == implode($result)) ||   strlen($password) < 9){
    echo 'senha inválida';
}else{
    echo $password;
}