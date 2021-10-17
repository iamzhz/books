<!DOCTYPE html>
<head>
<meta charset="utf-8" />
</head>
<body>
    
    <form action="" method="post">
        <h2>登录</h2>
        <br />
        <span>用户名称：</span>
        <input name="username" />
        <br />
        <span>用户密码：</span>
        <input type="password" name="password" />
        <br />
        <input type="submit" value="登录" />
    </form>
    <br />
    <?php
        if(isset($_POST['username']) && isset($_POST['password'])){
            if(@file("users\\".$_POST['username'].".txt") != false){
                if(file("users\\".$_POST['username'].".txt")[0]==md5($_POST['password'])){
                     // time()+3600*24*3 是三天后
                     setcookie("yn", "1", time()+3600*24*3);
                     setcookie("un", $_POST['username'], time()+3600*24*3);
                     setcookie("pw", md5($_POST['password']), time()+3600*24*3);
                    echo "<script>window.location.href='/books2/index.php';</script>";
                }else{
                    echo "账号或密码错误";
                }
            }else{
                echo "账号或密码错误";
            }
        }
    ?>
    <a href="register.php" style="text-decoration:none;color:blue;">暂无账号？</a>
    <p>注意：登录之后过了3天还要重新登录</p>
</body>
</html>