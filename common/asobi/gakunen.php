<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>

<?php

$gakunen=$_POST['gakunen'];

switch($gakunen)
{

    case'1':
            $kousya='あなたの校舎は南校舎です。';
            $bukatsu='部活にはスポーツ系と文科系があります。';
            $mokuhyou='まずは学校に慣れましょう。';
            break;

    case'2':
            $kousya='あなたの校舎は西校舎です。';
            $bukatsu='学園祭目指して全力で取り組みましょう。';
            $mokuhyou='今しか出来ない事を身につけよう。';
            break;

    case'3':
            $kousya='あなたの校舎は東校舎です。';
            $bukatsu='受験に就職に忙しくなります。';
            $mokuhyou='将来への道を作ろう。';
            break;

    default:
            $kousya='あなたの校舎は3年生と同じです。';
            $bukatsu='部活動はありません。';
            $mokuhyou='早く卒業しましょう。';
            break;
}


print '校舎 '.$kousya.'<br/>';
print '部活 '.$bukatsu.'<br/>';
print '目標 '.$mokuhyou.'<br/>';


?>

</body>
</html>