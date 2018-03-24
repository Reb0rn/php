
<meta charset="UTF-8">
<head>
 
<title>Не прошедшие проверку карточки</title>


  
    <head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" 
      type="image/png" 
      href="http://1.1.1.1/cc/soft/stop.png">
 
</head>

<center>

<b><h2>Не прошедшие проверку карточки</h2></b>
Возможные причины: некачественный скан, не виден QR-код, нет подписи/штампа и т.д.<br>
<br>

<?PHP
header('Content-Type: text/html; charset=UTF-8');
// открываем папку
$dh = opendir("ftp://10.200.7.86/st");
while($filename = readdir($dh))
{
// любые операции

echo " ".$filename."\n <br>";


//or



}




//$count = count($filename);
//echo $count;


//$test = "echooooooooooo";
//echo substr_count($test, "o");


?>
</center>