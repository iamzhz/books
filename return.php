<!DOCTYPE html>
<body>
<?php
        include 'ifyn.php';
    ?>
    <meta charset="utf-8" />
    <title>还书</title>
    <h1>还书</h1><hr />
    <form action="" method="post">
        <span>书的ISBN码：</span>
        <input name="isbn" />
        <input type="submit" value="还书" />
    </form>
    <br /><hr />
    <?php
        if(isset($_POST['isbn'])){
            include 'txtdb.php';
            if(getGb($_POST['isbn'])==0){
                echo "此图书未录入";
            }else{
                if($_COOKIE['un'] == file("txt\\".$_POST['isbn'].".txt")[2]){
                    $nr = putGb($_POST['isbn'], array(getGb($_POST['isbn'])[0], '0', "0"), 1);
                    echo "成功归还！！！<br />";
                    echo "它的ISBN码：".$_POST['isbn']."<br />";
                }else{
                    if(file("txt\\".$_POST['isbn'].".txt")[2]=='0'){
                        echo "此书未借出<br />";
                    }else{
                        echo "你不是这本书的借出人，你不能还书。";
                    }
                }
            }
        }
        //有nr[2]了
    ?>
</body>
</html>