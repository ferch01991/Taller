<?php
include('site_config.php');
$link = mysql_connect($db_host,$db_user,$db_password);
mysql_select_db($db_name, $link);


/*$query = "select * from contenidos";
$result = mysql_query($query) or die("error". mysql_error());

echo "<table border='1'>";
while ($row = mysql_fetch_array($result)) {
	echo "<tr>";
	foreach ($row as $col_value) {
		echo "<td>".$col_value."</td>";
	}
	echo "</tr>";
}
echo "</table>";*/
?>