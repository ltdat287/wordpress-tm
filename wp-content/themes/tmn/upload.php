<?php 
	$email = $_POST['email'];
	if (filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {
		
	
	}	
	
	try {
		$user = 'root';
		$pass = '';
		$dbh = new PDO('mysql:host=localhost;dbname=truemoney', $user, $pass);
		//check email exits ???
		$sth = $dbh->prepare('SELECT email
			FROM user_contacts
			WHERE email = :email 
			LIMIT 1');
		$sth->bindParam(':email', $email, PDO::PARAM_STR, 50);
		
		$checkExits = $sth->execute();	
		$row = $sth->fetch();
		
		if(!$row) {
			//add 
			$type = 1;
			$full_name = '';
			$note = '';
			
			$sth = $dbh->prepare('INSERT INTO user_contacts (email, full_name, note, type)
					VALUES (:email, :full_name, :note,:type)');
			$sth->bindParam(':email', $email, PDO::PARAM_STR, 50);
			$sth->bindParam(':full_name', $full_name, PDO::PARAM_STR, 50);
			$sth->bindParam(':note', $note, PDO::PARAM_STR, 250);
			$sth->bindParam(':type', $type, PDO::PARAM_INT, 2);
			
			$sth->execute();
			echo '1';die;
		} else {
			echo '2';die();
		}
		
		$checkExits = $dbh->query('SELECT email from user_contacts');
		foreach($dbh->query('SELECT email from user_contacts') as $row) {
			var_dump($row);
		}
		$dbh = null;
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
	}
	
	
?>