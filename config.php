<?php
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'audit_course');

$conn=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(mysqli_connect_errno())
{
	echo "Failed to Connect to MySQL".mysqli_connect_errno();
}	
else
{
	$query = '';
	$sqlScript = file("data/audit_elective.sql");
	foreach ($sqlScript as $line)	
	{
	
		$startWith = substr(trim($line), 0 ,2);
		$endWith = substr(trim($line), -1 ,1);
	
		if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') 
		{
			continue;
		}
		
		$query = $query . $line;
		if ($endWith == ';') 
		{
			mysqli_query($conn,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
			$query= '';		
		}
	}
}