<!DOCTYPE html>
<html>
<head>
	<style>
		body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
  background: #4CAF50;
}
		p{
			background-color: white;
			width: 500px;
			height: 100px;
			text-align: center;
			margin: auto;
			padding-top: 100px;
			font-size: 20px;
			font-weight: 600;
			padding: 10px;
		}		
	</style>
</head>
	<body>
<?php
			if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$telephone = $_POST['telephone'];
			$comment = $_POST['comment'];
			echo "<p>";
				echo "Your name is : .$name";
			echo "<br> Email: .$email.";
			echo "<br> Telephone: .$telephone.";
			echo "<br> Comment: .$comment.";
				
			echo "<p>";
		}
		
		?>
	</body>
	
</html>