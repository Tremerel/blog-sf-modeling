<?php 

function validateUser($user)
{
    $errors = array();

    if(empty($_POST['username'])){
        array_push($errors, 'Username is required');
    }
    if(empty($_POST['email'])){
        array_push($errors, 'Email is required');
    }
    if(empty($_POST['password'])){
        array_push($errors, 'Password is required');
    }
    if($_POST['password-conf'] !== $_POST['password']){
        array_push($errors, 'Password do not match');
    }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if (isset($existingUser)){
        array_push($errors, 'Email already exists');
    }

    return $errors;

}

function validateLogin($user)
{
    $errors = array();

    if(empty($_POST['username'])){
        array_push($errors, 'Username is required');
    }
    if(empty($_POST['password'])){
        array_push($errors, 'Password is required');
    }

    return $errors;

}

?>