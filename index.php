
<?php
$campo33= $_POST["cajacampo33"];

mysql_connect("localhost" , "admin" , "adminadmin");
mysql_select_db("relacionElementos");

$sql= "Select tabla1.campo33 , tabla2.campo32 from tabla1 , tabla2, tabla3
where tabla1.campo11= tabla2.campo11
and tabla1.campo32 = tabla3.campo32
and tabla3.campo32 = '$campo33'";
/* echo $sql; */

$r= mysql_query ($sql);
   while ($row= mysql_fetch_array($r))
     echo "<h3>DATOS:</h3>";
     echo $row ["campo33"]; echo "</br>";
     echo $row ["$campo33"]; echo "</br>";
     echo $row ["tabla3"]; echo "</br>";
?>
