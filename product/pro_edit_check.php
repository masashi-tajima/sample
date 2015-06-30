<?php
session_start();
session_regenerate_id(true);
if(isset($_SESSION['login'])==false)
{

    print 'ログインされていません。<br/>';
    print '<a href="../staff_login/staff_login.html">ログイン画面へ</a>';
    exit();
}

else
{

    print $_SESSION['staff_name'];
    print 'さんログイン中<br/>';
    print '<br/>';
}

?>


<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>


<?php

require_once('../common/common.php');

$post=sanitize($_POST);
$pro_code=$post['code'];
$pro_name=$post['name'];
$pro_price=$post['price'];
$pro_gazou_name_old=$_POST['gazou_name_old'];
$pro_gazou=$_FILES['gazou'];



if($pro_name=='')

{

     print '商品名が入力されていません。<br/>';

}

else
{

    print '商品名:';
    print $pro_name;
    print '<br/>';

}

if($pro_price=='')

{

    print '価格が入力されていません。<br/>';

}

if($pro_gazou['size']>0)
{

    if($pro_gazou['size']>1000000)
    {
        print '画像が大き過ぎます。';
    }

    else
    {
        move_uploaded_file($pro_gazou['tmp_name'],'./gazou/'.$pro_gazou['name']);
        print '<img src="./gazou/'.$pro_gazou['name'].'">'; 
        print '<br/>';
    }

}

if($pro_name==''||preg_match('/^[0-9]+$/',$pro_price)==0 ||$pro_gazou['size']>1000000)

{
    print '<form>';
    print '<input type="button" onclick="history.back()" value="戻る">';
    print '</form>';

}

else

{

    print '上記のように変更します。<br/>';
    print '<form method="post" action="pro_edit_done.php">';
    print '<input type="hidden" name="code" value="'.$pro_code.'">';
    print '<input type="hidden" name="name" value="'.$pro_name.'">';
    print '<input type="hidden" name="price" value="'.$pro_price.'">';
    print '<input type="hidden" name="gazou_name_old" value="'.$pro_gazou_name_old.'">';
    print '<input type="hidden" name="gazou_name" value="'.$pro_gazou['name'].'">';
    print '<br/>';
    print '<input type="button" onclick="history.back()" value="戻る">';
    print '<input type="submit" value="OK">';
    print '</form>';


}

?>



</body>
</html>