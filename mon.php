<head>
  <title>Monitoring</title>
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" 
      type="image/png" 
      href="http://1.1.1.1/cc/soft/favm.png">


  
  
  
  </head>

<center>
<br>
<h2>Мониторинг 10.200.7.82</h2>
<?PHP
$host = '10.200.7.82'; 
$port = 4080; 
$waitTimeoutInSeconds = 5; 
if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){   
    echo "<div style ='font-family: Arial; font-size: 12px;color:#42f468'>10.200.7.82 (port 4080) Online</div>";
} else {
     echo "<div style ='font-family: Arial; font-size: 12px;color:#ff3300'>10.200.7.82 Offline</div>";
} 
fclose($fp);
    // integer starts at 0 before counting
    $i = 0; 
    $dir = 'ftp://1.1.1.1/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
			
        }
    }

	if ($i > "0") {
    echo "<div style ='font-family: Arial Black; font-size: 24px;color:#ff0000'> Ахтунг!</div>";
	}
	    // prints out how many were in the directory
    echo "В репликаторе: $i файлов<br>";
	
$str = filesize('ftp://1.1.1.1/database/1.FDB');



if ($str > "1483243520") {
    echo "<div style ='font-family: Arial Black; font-size: 18px;color:#ffa64d'> База большая</div>";
} else {
    echo "OK<br>";
}
 echo "Размер БД: $str байт";

	
?>

<h2>Мониторинг 10.200.7.84</h2>

<?PHP

$host = '10.200.7.84'; 
$port = 4080; 
$waitTimeoutInSeconds = 5; 
if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){   
    echo "<div style ='font-family: Arial; font-size: 12px;color:#42f468'>10.200.7.84 (port 4080) Online</div>";
} else {
     echo "<div style ='font-family: Arial; font-size: 12px;color:#ff3300'>10.200.7.84 Offline</div>";
} 
fclose($fp);

    // integer starts at 0 before counting
    $b = 0; 
    $dir = 'ftp://10.200.7.84/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $b++;
			
        }
    }

	if ($b > "0") {
    echo "<div style ='font-family: Arial Black; font-size: 24px;color:#ff0000'> Ахтунг!</div>";
}
	

    echo "В репликаторе: $b файлов<br>";

	$str = filesize('ftp://10.200.7.84/database/1.FDB');
if ($str > "1483243520") {
    echo "<div style ='font-family: Arial Black; font-size: 18px;color:#ffa64d'> База большая</div>";
} else {
    echo "OK<br>";
}
 echo "Размер БД: $str байт";

?>
	
	

<h2>Мониторинг 1.1.1.88</h2>
<?PHP
$host = '1.1.1.88'; 
$port = 4080; 
$waitTimeoutInSeconds = 5; 
if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){   
    echo "<div style ='font-family: Arial; font-size: 12px;color:#42f468'>1.1.1.88 (port 4080) Online</div>";
} else {
     echo "<div style ='font-family: Arial; font-size: 12px;color:#ff3300'>1.1.1.88 Offline</div>";
} 
fclose($fp);

    // integer starts at 0 before counting
    $c = 0; 
    $dir = 'ftp://1.1.1.88/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $c++;
			
        }
    }

	if ($c > "0") {
    echo "<div style ='font-family: Arial Black; font-size: 24px;color:#ff0000'> Ахтунг!</div>";
}

    echo "В репликаторе: $c файлов<br>";
	



	$str = filesize('ftp://1.1.1.88/database/temp.FDB');
if ($str > "1483243520") {
    echo "<div style ='font-family: Arial Black; font-size: 18px;color:#ffa64d'> База большая</div>";
} else {
    echo "OK<br>";
}
 echo "Размер БД: $str байт";


 
?>
	
	

<h2>Мониторинг 1.1.1.89</h2>

<?PHP
$host = '1.1.1.89'; 
$port = 4080; 
$waitTimeoutInSeconds = 5; 
if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){   
    echo "<div style ='font-family: Arial; font-size: 12px;color:#42f468'>1.1.1.89 (port 4080) Online</div>";
} else {
     echo "<div style ='font-family: Arial; font-size: 12px;color:#ff3300'>1.1.1.89 Offline</div>";
} 
fclose($fp);

    // integer starts at 0 before counting
    $i = 0; 
    $dir = 'ftp://1.1.1.89/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
			
        }
    }

	if ($i > "0") {
    echo "<div style ='font-family: Arial Black; font-size: 24px;color:#ff0000'> Ахтунг!</div>";
}
	

    echo "В репликаторе: $i файлов<br>";

	$str = filesize('ftp://1.1.1.89/database/temp.FDB');
if ($str > "1483243520") {
    echo "<div style ='font-family: Arial Black; font-size: 18px;color:#ffa64d'> База большая</div>";
} else {
    echo "OK<br>";
}
 echo "Размер БД: $str байт";
 


?>

<h2>Мониторинг 1.1.1.99</h2>

<?PHP
$host = '1.1.1.99'; 
$port = 4080; 
$waitTimeoutInSeconds = 5; 
if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){   
    echo "<div style ='font-family: Arial; font-size: 12px;color:#42f468'>1.1.1.99 (port 4080) Online</div>";
} else {
     echo "<div style ='font-family: Arial; font-size: 12px;color:#ff3300'>1.1.1.99 Offline</div>";
} 
fclose($fp);

    // integer starts at 0 before counting
    $i = 0; 
    $dir = 'ftp://1.1.1.99/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
			
        }
    }

	if ($i > "0") {
    echo "<div style ='font-family: Arial Black; font-size: 24px;color:#ff0000'> Ахтунг!</div>";
}
	

    echo "В репликаторе: $i файлов<br>";

	$str = filesize('ftp://1.1.1.99/database/temp.FDB');
if ($str > "1483243520") {
    echo "<div style ='font-family: Arial Black; font-size: 18px;color:#ffa64d'> База большая</div>";
} else {
    echo "OK<br>";
}
 echo "Размер БД: $str байт";
 


?>

<h2>Мониторинг 1.1.1.86 (РЦ)</h2>

<?PHP

$host = '1.1.1.86'; 
$port = 4080; 
$waitTimeoutInSeconds = 5; 
if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){   
    echo "<div style ='font-family: Arial; font-size: 12px;color:#42f468'>1.1.1.86 (port 4080) Online</div>";
} else {
     echo "<div style ='font-family: Arial; font-size: 12px;color:#ff3300'>1.1.1.86 Offline</div>";
} 
fclose($fp);
    // integer starts at 0 before counting
    $i = 0; 
    $dir = 'ftp://1.1.1.86/re';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
			
        }
    }

	if ($i > "0") {
    echo "<div style ='font-family: Arial Black; font-size: 24px;color:#ff0000'> Ахтунг!</div>";
}
	

    echo "В репликаторе: $i файлов<br>";

	$str = filesize('ftp://1.1.1.86/db/temp.FDB');
if ($str > "1483243520") {
    echo "<div style ='font-family: Arial Black; font-size: 18px;color:#ffa64d'> База большая</div>";
} else {
    echo "OK<br>";
}
 echo "Размер БД: $str байт";
 
/*  $start = microtime(true);
# ...
$time = microtime(true) - $start;
printf('Скрипт выполнялся %.4F сек.', $time); */

?>




	



</center>