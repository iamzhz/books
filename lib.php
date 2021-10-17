<meta charset="utf-8" />
<?php
        include 'ifyn.php';
    ?>
    <title>书库</title>
    <h1 style="text-align: center;">书库</h1>
<?php
    include 'txtdb.php';
    $a = read_all("txt\\");
    $file = $a[1];
    echo "<table border='1'><tr><th>ISBN码</th><th>图书名称</th><th>是否被借出(1是0否)</th><th>借出人（未借出为0）</th></tr>";
    for($i=0;$i<=$a[0]-1;$i+=1){
      preg_match('/\d+/', $file[$i], $isbn);
      $v = getGb($file[$i], 1);
      echo "<tr><th>".$isbn[0]."</th><th>".$v[0]."</th><th>".$v[1]."</th><th>".$v[2]."</th></tr>";
    }
    echo "</table>"
    //有nr[2]了
?>