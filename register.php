<!DOCTYPE html>
<head>
<meta charset="utf-8" />
</head>
<body>
    <form action="" method="post">
        <h2>注册</h2>
        <br />
        <span>用户名称：</span>
        <input name="username" />
        <br />
        <span>用户密码：</span>
        <input type="password" name="password" />
        <br />
        <span>重输密码：</span>
        <input type="password" name="password2" />
        <br />
        <input type="submit" value="注册" />
    </form>
    <br />
    <?php
        if(isset($_POST['username']) && isset($_POST['password'])){
            if($_POST['password']==$_POST['password2']){
                if(@file("users\\".$_POST['username'].".txt") != false){
                  echo "Sorry,此账号已存在";
                }else{
                    $fp = fopen("users\\".$_POST['username'].".txt", 'w');
                    fwrite($fp, md5($_POST['password']));
                    // 用MD5加密更安全
                    echo "成功注册！！！";
                    // time()+3600*24*3 是三天后
                    setcookie("yn", "1", time()+3600*24*3);
                    setcookie("un", $_POST['username'], time()+3600*24*3);
                    setcookie("pw", md5($_POST['password']), time()+3600*24*3);
                    echo "登录成功！<a href='/books2/index.php'>点此</a>进入系统";
                }
            }else{
                echo "密码不相同！";
            }
        }
    ?>
    <br />
    <a href="login.php" style="text-decoration:none;color:blue;">已有账号？</a>
    <p>注意：登录之后过了3天还要重新登录</p>
</body>
</html>