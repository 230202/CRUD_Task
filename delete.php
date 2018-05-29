<HTML>
	<head></head><body>
<?php
//delete.php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {//Check it is coming from a form
		//mysql credentials
	require_once 'login.php';
	
	$item = $_POST["MatchIndex"];
	
	$conn = new mysqli($host, $Username, $password, $database);
	if ($conn->connect_error) 
		{
    		die("Connection failed: " . $conn->connect_error);
		}
	
	$sql= "DELETE FROM Game_Records WHERE Match_Index = $item"
?>
</body>
</HTML>