<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 

{
    //require_once 'Login.php';
    $mysql_host = "localhost";
    $mysql_username = "aiden028";
    $mysql_password = "ComputerScience";
    $mysql_database = "Game_statistics";
    
    $MatchIndex=$_POST["MatchIndex"];
    $Firstname=$_POST["firstname"];
    $Lastname=$_POST["lastname"];
    $GameName=$_POST["Nameofgame"];
    $Team1=$_POST["Team1"];
    $Team2=$_POST["Team2"];
    $Victor=$_POST["Victor"];
    $Score=$_POST["Score"];
   
    //Opens MYSQL connection
    $mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
    
    	$statement = $mysqli->prepare("INSERT INTO Game_Records(First_Name, Last_Name, Game_Name, Team_1, Team_2, Victor, Score) VALUES (?, ?, ?, ?, ?, ?, ?)"); //prepare sql insert query
		//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
		$statement->bind_param('ssssssd', $Firstname, $Lastname, $GameName, $Team1, $Team2, $Victor, $Score); //bind value
		if($statement->execute())
			{
			    echo nl2br("Hello, " . $Firstname . " Thank you for using us today!");
			}
			
		else{
				print $mysqli->error; //show mysql error if any 
			}

}
// This provides the error message that will appear if your credentials or database are invalid
else{
    echo ("error - no data was posted");
    }
?>