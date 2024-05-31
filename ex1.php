<?php
setcookie("test1","abdessadek",time()+60*60*24,"/");
echo json_encode($_COOKIE["test1"]);
?>