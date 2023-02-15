<?php 

// $host = "localhost";
// $username = "root";
// $password = "";
// $db = "star_db";
//
//$connection = mysqli_connect($host,$username,$password,$db);
// 
//$firt_name = "hridoy"; 
//$last_name = "jomadder"; 
//   
//$query = "insert into users (first_name,last_name) values ('$firt_name','$last_name')";
//
//mysqli_query($connection,$query);
//
//echo mysqli_error($connection);
class Database
{

	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $db = "star_db";
 
	function connect()
	{

		$connection = mysqli_connect($this->host,$this->username,$this->password,$this->db);
		return $connection;
	}

	function read($query)
	{
		$conn = $this->connect();
		$result = mysqli_query($conn,$query);

		if(!$result)
		{
			return false;
		}
		else
		{
			$data = false;
			while($row = mysqli_fetch_assoc($result))
			{

				$data[] = $row;

			}

			return $data;
		}
	}

	function save($query)
	{
		$conn = $this->connect();
		$result = mysqli_query($conn,$query);

		if(!$result)
		{
			return false;
		}else
		{
			return true;
		}
	}

}



