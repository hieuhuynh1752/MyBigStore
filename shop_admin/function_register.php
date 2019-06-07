<?php

	function add_customer($username,$email,$password){
		$db = getDB();// Connect to database
		$query ="INSERT INTO customers(username, email, password)
				VALUES (?,?,?)";
		try {
			$statement = $db->prepare($query);
			$statement->bindParam(1,$username);
			$statement->bindParam(2,$email);
			$statement->bindParam(3,$password);
			$statement->execute();
			$statement->closeCursor();			
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}

?>	