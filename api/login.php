<?php
    // 導入資料庫寫法。
    include "db.php";
    $name=$_POST["username"];
    $password=$_POST['password'];
    $login=$user->all(["user"=>$name]);
    if(!empty($login)){
        unset($_SESSION["logsum"]);
        if($login[0]['password']==$password){
            $_SESSION["name"]=$name;
            to("../index.php");
        }else{
            if(!empty($_SESSION["PasswordIsMistake"])){
                $_SESSION["PasswordIsMistake"]++;
            }else{
                $_SESSION["PasswordIsMistake"]=1;
            }
            to("../index.php?do=login");
        }
    }else{
        if(!empty($_SESSION["logsum"])){
            $_SESSION["logsum"]++;
        }else{
            $_SESSION["logsum"]=1;
        }
        to("../index.php?do=login");
    }
?>