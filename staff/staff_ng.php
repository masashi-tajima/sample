<?php
session_start();
session_regenerate_id(true);
if(isset($_SESSION['login'])==false)
{

    print '���O�C������Ă��܂���B<br/>';
    print '<a href="../staff_login/staff_login.html">���O�C����ʂ�</a>';
    exit();
}

else
{

    print $_SESSION['staff_name'];
    print '���񃍃O�C����<br/>';
    print '<br/>';
}

?>


<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP��b</title>
</head>
<body>

�X�^�b�t���I������Ă��܂���B<br/>
<a href="staff_list.php">�߂�</a>






</body>
</html>