<HTML>
<HEAD>
<TITLE>cantact</TITLE>
</HEAD>
<BODY>
<?php
$username=$HTTP_POST_VARS['username'];//获取姓名
$message=$HTTP_POST_VARS['subject'];//获取用户输入的留言
$Messageboard=$username."/".$passport;//将二者连接起来(即字符的链接)，中间用 / 分割。
$to = "li.r.ae@m.titech.ac.jp";//接收邮件的邮箱
$subject = "用户留言";//邮件主题
$from = "liruixiao94@outlook.com";//发送邮件的邮箱
$headers = "From: $from";
mail($to,$subject,$message,$headers);//利用mail函数发送邮件
echo “留言发送成功！”;
?>
</BODY>
</HTML>
