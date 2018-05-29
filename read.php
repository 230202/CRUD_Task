<?php
//read.php
//require_once 'Login.php';
    $mysql_host = "localhost";
    $mysql_username = "aiden028";
    $mysql_password = "ComputerScience";
    $mysql_database = "Game_statistics";
$conn = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	
$sql = "SELECT * FROM Game_Records WHERE Match_Index='" . $_POST['MatchIndex'] . "'";
$result = $conn->query($sql);

$MatchIndex = $row[0];
$Firstname = $row[1];
$Lastname = $row[2];
$GameName = $row[3];
$Team1 = $row[4];
$Team2 = $row[5];
$Victor = $row[6];
$Score = $row[7];

// HTML to display the form on this page.
echo"<HEAD> <link rel='stylesheet' href='Main.css'></HEAD><BODY>";
echo nl2br("<H2>Game Records</H2>"); 

if ($result->num_rows > 0)//will only do this if there is something to be returned from the above line
	{	echo"<HEAD> <link rel='stylesheet' href='Main.css'></HEAD>";
		echo "<TABLE><TR><TH>MatchIndex</TH><TH>Firstname</TH><TH>Lastname</TH><TH>Game Name</TH><TH>Team1</TH><TH>Team2</TH><TH>Victor</TH><TH>Score</TH></TR>";
		// Iterate through all of the returned images, placing them in a table for easy viewing
	while($row = $result->fetch_assoc())
		{
			// The following few lines store information from specific cells in the data about an image
			echo "<TR>";
			echo "<TD>".$row['Match_Index']. "</TD><TD>". $row['First_Name']. "</TD><TD>".$row['lastname'] ."</TD><TD>".$row[3]."</TD><TD>".$row[4]."</TD><TD>".$row[5]."</TD><TD>".$row[6]."</TD><TD>".$row[7]."</TD>";
			echo "<TD><form action= 'update.php' method = 'post'>";
			echo "<button name = 'update'   type = 'submit' value =".$row[1].">Edit</button></FORM>";
			echo "<TD><form action= 'delete.php' method = 'post'>";
			echo "<button name = 'delete'   type = 'submit' value =".$row[1].">Delete</button></FORM>";
			echo "</TR>";
		}
	echo "</TABLE>";
	}
	else{
		echo "<br> 0 results";
		}
echo"<br><form action= 'update.php' method = 'get'>";
echo "<input name = 'action'   type = 'submit' value = 'Go Back'></form>";
echo '</body>';
?>