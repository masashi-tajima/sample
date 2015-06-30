<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>

<?php

$mbango=$_POST['mbango'];

$hoshi['M1']='カニ星雲';
$hoshi['M31']='アンドロメダ大星雲';
$hoshi['M42']='オリオン大星雲';
$hoshi['M45']='すばる';
$hoshi['M57']='ドーナツ星雲';

foreach($hoshi as $key=>$val)

{
    print $key.'は'.$val;
    print '<br/>';
}

print 'あなたが選んだ星は';
print $hoshi[$mbango];

?>

</body>
</html>