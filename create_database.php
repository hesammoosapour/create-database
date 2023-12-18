<?php

echo PHP_EOL;
$db_name = readline('Enter name of the database that you want to create: ');

//$result = execCmd("mysql -u root -p -e 'create database  $db_name collate utf8mb4_unicode_520_nopad_ci;'");
$result = exec("C:/xampp/mysql/bin/mysql -u root  -e 'create database  $db_name collate utf8mb4_unicode_520_nopad_ci;'");
//$result = shell_exec("C:/xampp/mysql/bin/mysql -u root -p -e 'create database  $db_name collate utf8mb4_unicode_520_nopad_ci;'");
return var_dump($result);


echo 'Enjoy'.PHP_EOL;
echo 'Powered By Hesam Moosapour'.PHP_EOL;

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = $db_name;
$file = dirname(__FILE__) . '\\' . 'job_create.sql';
$mySQLDir = '"C:\\xampp\\MySQL\\mysql\\bin\\mysql.exe"';


if ($dbpass != '') {
    $cmd = $mySQLDir . ' -h ' . $dbhost . ' --user=' . $dbuser . ' --password=' . $dbpass . ' < "' . $file . '"';

} else {
    $cmd = $mySQLDir . ' -h ' . $dbhost . ' --user=' . $dbuser . ' < "' . $file . '"';
}

echo $cmd;

exec('"' . $cmd . '"', $out, $retval);
echo "\n";
echo($retval);




