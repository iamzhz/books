<!DOCTYPE html>
<head>
<meta charset="utf-8" />
</head>
<body>
    <?php
        include 'ifyn.php';
    ?>
    <title>My books</title>
    <h1>My books</h1>
    <hr />
    <input type="button" value="查找图书" onclick="window.location.href='lookUp.php';" />
    <br />
    <input type="button" value="录入图书" onclick="window.location.href='enroll.php';" />
    <br />
    <input type="button" value="借书" onclick="window.location.href='borrow.php';" />
    <br />
    <input type="button" value="还书" onclick="window.location.href='return.php';" />
    <br />
    <input type="button" value="书库" onclick="window.location.href='lib.php';" />
    <br />
    <br />
    <br />
    <hr />
    <input type="button" value="重新登录" onclick="window.location.href='login.php';" />
    <input type="button" value="退出登录" onclick="window.location.href='exit.php';" />
</body>
</html>