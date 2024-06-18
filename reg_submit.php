<?php
session_start()


if(
    $_POST['name']=''||
    $_POST['email']=''||
    $_POST['phone']=''||
    $_POST['password']=''||
    $_POST['Confirmpassword']=''
    
    ){
      $_SESSION['error']='Fill all the entries';
           header('Location: register.php');
        exit();
    }
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirmpassword = $_POST['Confirmpassword'];

//echo $name." ".$email." ".$phone;

$conn = mysqli_connect(
    'localhost',
    'root',
    'sisterphysics.com',
    'Database'
    );
    
  $result = mysqli_query( $conn, 
    "INSERT INTO users 
    (`name`,`email`,`password`,
    `phone`, `role_id`, `status`,created_at ) 
    VALUES(
    '$name',
    '$email',
    '$password',
    '$phone',
     1, 
     1,
     NOW()
    )
    ");

    if($result){
        echo $result;
    }
    else{
        echo $result;
    }

?>