<?php
    if(!isset($_COOKIE['yn'])){ // 判断是否已经登陆了
        echo "<script>window.location.href='login.php'</script>";
    }elseif($_COOKIE['yn']!="1"){
        echo "<script>window.location.href='login.php'</script>";
    }else{
        if(@file("users\\".$_COOKIE['un'].".txt")[0] != $_COOKIE['pw']){
            echo "<script>window.location.href='login.php'</script>";
        }
    }
?>