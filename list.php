<head>
<title>������� ������</title>
  
    <head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" 
      type="image/png" 
      href="http://10.200.1.11/cc/soft/iconsite_2.png">
	  
</head>

<center>

<b><h2>������� ������</h2></b>




<?PHP

include 'stat.php';
// integer starts at 0 before counting
    $i = 0; 
    $dir = 'ftp://1.1.1.1/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
			
        }
    }
	$nk=$i * 2;
    // prints out how many were in the directory
    echo "<h2>� �������: <b>$i</b> ������</h2>";

		
$hours = floor($nk / 60);
$minutes = $nk % 60;

echo "<h2>����� �������: $hours �. $minutes ���.</h2>";
echo "<h2>�� ������� 2 ��� �� 1 ������</h2>";

// ��������� �����
$dh = opendir("ftp://1.1.1.1/");
while($filename = readdir($dh))
{
// ����� ��������
$fs = filesize($filename);
$ft = filetype($filename);
$fm = filemtime($filename);
echo "� �������: ".$filename."\n <br>";

}




//$count = count($filename);
//echo $count;


//$test = "echooooooooooo";
//echo substr_count($test, "o");


?>
</center>