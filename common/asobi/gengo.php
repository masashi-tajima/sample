<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>

<?php

require_once('../common/common.php');

$seireki=$_POST['seireki'];

$wareki=gengo($seireki);
print $wareki;


?>

</body>
</html>