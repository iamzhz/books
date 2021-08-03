<!DOCTYPE html>
<body>
    <meta charset="utf-8" />
    <title>查找My books</title>
    <form action="" method="post">
        <span>书的ISBN码：</span><input name="isbn" />
        <input type="submit" value="查找" />
    </form>
    <br /><br /><br />
    <?php
        if(isset($_POST['isbn'])){
        include 'txtdb.php';
        $nr = getGb($_POST['isbn']);
        if($nr == 0){
            echo "错误-未收录该图书";
        }else{
            echo "它的ISBN码：".$_POST['isbn']."<br />";
            echo "它的名称：  ".$nr[0]."<br />";
            if($nr[1] == '0')
                $yn = "否";
            elseif($nr[1] == '1')
                $yn = "是";
            echo "是否借出：  ".$yn;
            if($yn == '1'){//有nr[2]了
                echo "<br />借出人：".$nr[2];
            }
        }
        }
    ?>
</body>
</html>