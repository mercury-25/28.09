<?php
$fp = fopen("file.txt", "w"); 
$text = "мобс";

fwrite($fp, $text);
fclose($fp);
?>