  <title>Здесь можно посмотреть обработана ли ваша заявка</title>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://10.2.1.11/cc/soft/w3.css">
<link rel="stylesheet" href="http://10.2.1.11/cc/soft/w3-colors-flat.css">
    <head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" 
      type="image/png" 
      href="http://10.200.1.11/cc/soft/iconsite_4.png">
 
</head>


<center>
<b><h2>Здесь можно посмотреть обработана ли ваша заявка</h2></b>
<div class="w3-animate-opacity">
 <div class="w3-flat-peter-river">

<style>
div {
    width: 700px;
}
</style>
<?php
// outputs e.g.

$filename = 'logs/ra_handling.log';
if (file_exists($filename)) {
    echo "ra_handling.log был последний раз изменен: " . date ("F d Y H:i:s.", filemtime($filename));
}
?>
</div> 
<div class="w3-flat-peter-river">
<?php
$filenam = 'logs/ra_handling.log';
echo $filenam . ' Размер: ' . filesize($filenam) . ' байт';
?>
</div> 
<h3> 
 <div class="w3-yellow w3-hover-shadow w3-center "><a href='http://10.1.1.11/cc/soft/logs/ra_handling.log'>Скачать лог РЦ ( 33)</a><br>
(обновление лога 1 раз в 15 мин.)
</div> </h3> <div class="w3-flat-peter-river">
<?php
// outputs e.g.
$filename = 'logs_new/ra_handling.log';
if (file_exists($filename)) {
    echo "ra_handling.log был последний раз изменен: " . date ("F d Y H:i:s.", filemtime($filename));
}
?>


<?php
$filenam = 'logs_new/ra_handling.log';
echo $filenam . ' Размер: ' . filesize($filenam) . ' байт';
?>
</div> 
<h3> 
 <div class="w3-yellow w3-hover-shadow w3-center "><a href='http://10.2.1.1/cc/soft/logs_new/ra_handling.log'>Скачать лог РЦ (новый )</a><br>
(обновление лога 1 раз в 15 мин.)
</div> </h3>
</div> 

<a href='http://10.1.1.1/cc/soft/faq.html'>FAQ по 41</a>

</center>
</body>
</html> 