<?php
function TOJMail($From,$FromName,$FromUser,$FromPass,$TOMail,$TOTitle,$TOContent,$SmtpServer)
  {
  $jmail=new COM("JMail.Message") or die("无法调用Jmail组件");
  $jmail->logging="true";
  $jmail->From=$From;
  $jmail->FromName=$FromName;
  $jmail->AddRecipient($TOMail);
  $jmail->Subject=$TOTitle;
  $jmail->Body=$TOContent;
  $jmail->MailServerUserName=$FromUser;
  $jmail->MailServerPassword=$FromPass;
  $jmail->Send($SmtpServer);
  echo   "感谢您的来信！";
  }

  $From = "liruixiao94@126.com";    //发件人地址
  $FromName = "liruixiao";            //发件人姓名
  $FromUser = "liruixiao94";        //发件人用户名
  $FromPass = "ligou2007";        //发件人密码
  $TOMail = "li.r.ae@m.titech.ac.jp";        //收件人地址
  $TOTitle = "Mail from my page";        //邮件标题
  $TOContent = "Mail from my page";    //邮件内容
  $SmtpServer = "imap-mail.outlook.com";            //邮件服务器
  TOJMail($From,$FromName,$FromUser,$FromPass,$TOMail,$TOTitle,$TOContent,$SmtpServer);
?>
