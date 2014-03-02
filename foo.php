
<?php

echo "ok".'<br/>';

?>

	


<?php
$con = mysql_connect("localhost","root","");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
// Create database
if (mysql_query("CREATE DATABASE myweb_db",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }


// Create table in myweb_db database
mysql_select_db("myweb_db",$con);
$sql = "create table Persons
(
FirstName varchar(15),
LastName varchar(15),
Age int
)";
mysql_query($sql,$con);


//insert
mysql_query("insert into Persons(FirstName,LastName,Age)
Values('Lin','wang','34')
");
mysql_query("insert into Persons(FirstName,LastName,Age)
Values('Yang','Meng','27')
");


// select
//mysql_select_db("myweb_db",$con);
$result = mysql_query("select * from Persons");

while($row = mysql_fetch_array($result))
{
	echo $row['FirstName']." ".$row['LastName'];
	echo 'cha';
	echo '<br/>';
}

mysql_close($con);
?>



