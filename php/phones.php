<?php
	include("connexion.inc.php");
	//var_dump(file_get_contents("php://input"));
	$data = json_decode(file_get_contents("php://input"));
	$age=$data->age;

	
	$sql="select * from telephones where age>".$age;
	$result=mysql_query($sql);
	
	$i=0;
	while($row=mysql_fetch_array($result)){
		$tab[$i]['age']=$row['age'];
		$tab[$i]['id']=$row['id'];
		$tab[$i]['name']=$row['name'];
		$tab[$i]['snippet']=$row['snippet'];
		$i++;
	}

echo json_encode($tab);
?>