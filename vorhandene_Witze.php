<html>
<head>
	<title>Die Witze Community</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
	<h2>Witze Forum</h2>

 
	<h3>Bisherige Witze</h3>
<?php
	$pdo = new PDO('mysql:host=localhost;dbname=witze', 'root', 'root');

	$sql = "SELECT Text, Kategorie FROM witze";
		foreach ($pdo->query($sql) as $row) {
			echo $row['Kategorie'].":  ".$row['Text']."<br/>";
   
}
?>	
	<form action="neue_Witze.php" method="POST"> 
	<input type="submit" value="Neue Witze">
	</form>

</body>
</html>