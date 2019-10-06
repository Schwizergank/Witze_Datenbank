<html>
<head>
	<title>Die Witze Community</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<h2>Witze Forum</h2>
	
	
	<?php
	
	if (isset($_POST['text'],$_POST['kategorie'])){
		if(empty($_POST['text'])){
			echo '<span style="color:red"> Bitte Füllen Sie die Felder aus! </span>';
	}else{
		
			$pdo = new PDO('mysql:host=localhost;dbname=witze', 'root','root');
		
			$neue_Witze = array();
			$neue_Witze['Kategorie'] = $_POST['kategorie'];
			$neue_Witze['Text'] = $_POST['text'];
		
			$statement = $pdo->prepare("INSERT IGNORE INTO witze (Text, Kategorie) VALUES (:Text, :Kategorie)");
			$statement->execute($neue_Witze);  
	}
	}
	?>
	
	<form action="neue_Witze.php" method="POST"> 
		Hier können Sie einen neuen Witz in die Datenbank einfügen. <br> <br>
		Inhalt <br>   
		<textarea name="text" cols="50" rows="10"></textarea>
		<br>
		<br> Kategorie: <br>
        <input type="Text" name="kategorie"> <br> 
		
		
        <input type="hidden" name="form_submitted" value="1" />
		<br>
        <input type="submit" value="Einfügen">

    </form>
	
	<form action="vorhandene_Witze.php" method="POST"> 
	<input type="submit" value="Witzdatenbank durchsuchen">
	</form>

</body>
</html>