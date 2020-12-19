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

$senha = isset($_POST['senha']) ? $_POST['senha'] : ''; 


$uppercase = preg_match('@[A-Z]@', $senha);
$lowercase = preg_match('@[a-z]@', $senha);
$number = preg_match('@[0-9]@', $senha);
$caracter = preg_match('/^(?=.*[!@#$%^&*-])/', $senha);

//!-%&-+-^

if(!$uppercase || !$lowercase || !$number || !$caracter || strlen($senha) < 9){
    echo 'senha inválida';
}else{
    echo $senha;
}

