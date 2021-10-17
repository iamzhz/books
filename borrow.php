<!DOCTYPE html>
<body>
    <?php
        include 'ifyn.php';
    ?>
    <meta charset="utf-8" />
    <title>借书</title>
    <h1>借书</h1><hr />
    <form action="" method="post">
        <span>书的ISBN码：</span>
        <input name="isbn" />
        <input type="submit" value="借书" />
    </form>
    <br /><hr />
    <?php
        if(isset($_POST['isbn'])){
            include 'txtdb.php';
            if(getGb($_POST['isbn'])==0){
                echo "此图书未录入";
            }else{
                $nr = putGb($_POST['isbn'], array(getGb($_POST['isbn'])[0], '1', $_COOKIE['un']), 1);
                echo "成功借出！！！<br />";
                echo "它的ISBN码：".$_POST['isbn']."<br />";
                echo "借出人：".$_COOKIE['un'];
                //有nr[2]了
            }
        }
    ?>
</body>
</html>