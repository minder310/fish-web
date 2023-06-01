<?php
    // 導入資料庫寫法。
    include "db.php";
    $name=$_POST["username"];
    $password=$_POST['password'];
    $login=$user->all(["user"=>$name]);
    if(!empty($login)){
        if($login[0]['password']==$password){
            $_SESSION["name"]=$name;
            to("../index.php");
        }else{
            $_SESSION['PasswordIsMistake']++;
        }
    }else{
        $_SESSION["logsum"]++;
    }
?>