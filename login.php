<form action="./api/login.php" method="post">
    <label for="username">帳號:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">密碼:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="登入">
</form>
    <?php
    if(!empty($_SESSION["logsum"])){
        ?>
        <h3 style="color:red;">無此帳號<?=$_SESSION["logsum"]?>次</h3>
        <?php
    }else if(!empty($_SESSION["PasswordIsMistake"])){
        ?>
        <h3 style="color:red;">密碼錯誤<?=$_SESSION["PasswordIsMistake"]?>次</h3>
        <?php
    }
    ?>