<!DOCTYPE html>
<body>
    <meta charset="utf-8" />
    <title>录入My books</title>
    <form action="" method="post">
        <span>书的ISBN码：</span>
        <input name="isbn" />
        <br />
        <span>书的名称：</span>
        <input name="name" />
        <input type="submit" value="录入" />
    </form>
    <br /><br /><br />
    <?php
        if(isset($_POST['isbn']) && isset($_POST['name'])){
        include 'txtdb.php';
        $nr = putGb($_POST['isbn'], array($_POST['name'], '0', "0")); //有nr[2]了
        echo "录入成功！！！<br />";
        echo "它的ISBN码：".$_POST['isbn']."<br />";
        echo "它的名称：  ".$_POST['name']."<br />";
        }
    ?>
</body>
</html>