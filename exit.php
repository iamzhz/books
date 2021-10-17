<?php
setcookie("yn", "0", time()-3600);
setcookie("un", "0", time()-3600);
setcookie("pw", "0", time()-3600);
echo "<script>window.location.href='login.php';</script>";
?>