<?php
// var_dump('dsa');die('dsa');
include 'dbconnect.php';

if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contactNo = $_POST['contactNo'];
    $psw = $_POST['psw'];
    $pswrepeat = $_POST['pswrepeat'];
    $identity = $_POST['identity'];


if($psw == $pswrepeat){
    $query = "SELECT  `username`, `email`, `address`, `password`, `contact`, `identity` FROM `users` 
    WHERE `username`= '$name', `email`= '$email',`address`= '$address', `contact`= '$contactNo',`identity`= '$identity'";  
    $result = mysqli_query($con, $sql); 
    $row_cnt = $result->num_rows;

    if($row_cnt>0){
        //record already existing
        header("Location: index.php?m=3");
    }else{
        //insert data
        $sql = "INSERT INTO `users` ( `username`, `email`, `address`, `password`, `contact`, `identity`)
        VALUES ('$name','$email','$address','$psw','$contactNo','$identity')";
       //  var_dump($sql);die('sds');
       mysqli_query($con, $sql); 
   
       header("Location: index.php?m=1");
    }

    
}else{
    //passwords not matched
    header("Location: index.php?m=2");
}
}


?>