<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>CONVERSION</title>
<style>
th { text-align: left; }

table, th, td {
  border: 2px solid grey;
  border-collapse: collapse;
}

th, td {
  padding: 0.2em;
}
</style>
</head>

<body>
<h1>Database test page</h1>

<p>Showing contents of timezones table:</p>

<table border="1">
<tr><th>Country in Time Zone</th><th>Time Zone</th></tr>

<?php
 
$db_host   = '192.168.2.12';
$db_name   = 'fvision';
$db_user   = 'webuser';
$db_passwd = 'insecure_db_pw';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

$q = $pdo->query("SELECT * FROM timezones ORDER BY name");

while($row = $q->fetch()){
  echo "<tr><td>".$row["code"]."</td><td>".$row["name"]."</td></tr>\n";
}

?>
</table>
</body>
</html>
