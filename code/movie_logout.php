<?php
session_start();
session_destroy();
//setcookie("UID",$uid,time()-17280);
header('Locaton: /logi.php');
echo "<script type='text/javascript'>";
echo "alert('η»εΊζε');";
echo "</script>";
echo "<meta http-equiv='Refresh' content='0; url=index.php'>";
?>