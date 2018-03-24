<?PHP

if (isset($_GET['file'])) 
  {
  // Get file contents
  $contents = file_get_contents("ftp://$ftpUser:$ftpPass@$ftpHost/$startDir/" . urldecode($_GET['file']));
  // Get mime type
  $finfo = new finfo(FILEINFO_MIME);
  $mimeType = $finfo->buffer($contents);
  // Set content type header and output file
  header("Content-type: $mimeType");
 echo $contents;
 }
 else {
 $dir = (isset($_GET['dir'])) ? $_GET['dir'] : '';
 $conn = ftp_connect($ftpHost) or die("Could not connect, please refresh in 2 seconds");
 ftp_login($conn, $ftpUser, $ftpPass);
 // change dir to avoid ftp_rawlist bug for directory names with spaces in them
 ftp_chdir($conn, "$startDir/$dir");
 // fetch the raw list
 $list = ftp_rawlist($conn, '');
 reset($list);
 while (list(, $item) = each($list)) {
 if(!empty($item)) {
 // Split raw result into pieces
 $pieces = preg_split("/[\s]+/", $item, 9);
 // Get item name
 $name = $pieces[8];
 // Skip parent and current dots
 if ($name == '.' || $name == '..' || $name == 'index.html')
 continue;
 if($n%3 == 0){echo "<tr>";}
 // Is directory
 if ($pieces[0]{0} == 'd') {
 echo "<td class='logs main'><a href='?dir={$dir}/{$name}'><strong>{$name}</strong></a><img class='del' src='delete.gif'></td>";
 }
 $n++;
 // Is file
 if ($pieces[0]{0} !== 'd') {
 echo "<tr><td class='logs' colspan='99'><a href='displayer.php?file={$dir}/{$name}'>{$name}</a><img class='del' src='delete.gif'></td>";
 }
 }
 }
 
 ?>