<html>
 <?php

 $mbox = imap_open("{1.1.1.1/pop3/novalidate-cert}INBOX", "zayavka@bank", "zayavka")
      or die("can't connect: " . imap_last_error());

 $check = imap_mailboxmsginfo($mbox);

if ($check) {
     echo "Дата: "     . $check->Date    . "<br />\n" ;
     echo "Протокол: "   . $check->Driver  . "<br />\n" ;
     echo "Ящик: "  . $check->Mailbox . "<br />\n" ;
     echo "Кол-во писем: " . $check->Nmsgs   . "<br />\n" ;
     echo "Размер: "     . $check->Size    . "<br />\n" ;
 } else {
     echo "imap_mailboxmsginfo() failed: " . imap_last_error() . "<br />\n";
 }

 imap_close($mbox);

?>


</html>