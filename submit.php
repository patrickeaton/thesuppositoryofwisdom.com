<?php
 		$conn = NULL;
 		$quote;
 		$image;

        try{
            $conn = new PDO("mysql:host=localhost;dbname=suppository;", "root", "");
			
			$quote     = addslashes($_POST['quote']);
			$reference = addslashes($_POST['reference']);
			$sql = 'INSERT INTO quotes(QUOTE,REF) VALUES("'.$quote.'","'.$reference.'")';

            $stmt = $conn->prepare($sql);
            $stmt->execute();           	
			

            } catch(PDOException $e){
 				echo "An Error Occurred";
            }          
?>