<?php
try{
    $conn = new PDO('mysql:host=localhost;dbname=cit2202', 'cit2202', 'letmein');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}
//get the id from the query string e.g. for details.php?id=4, $_GET['id'] has a value of 4
$filmId = $_GET['id'];

//prepared statement uses this id value to select a single film
$stmt = $conn->prepare("SELECT * FROM films WHERE films.id = :id");
$stmt->bindValue(':id',$filmId);
$stmt->execute();
$film = $stmt->fetch(); // we only want one film so retrieve a single row
$conn = NULL;
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Display the details for a film</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php
//simple validation to see if we found a film
if($film){
	// print out the film's details
	echo "<h1>{$film['title']}</h1>";
	echo "<p>Year:{$film['year']}</p>";
	echo "<p>Duration:{$film['duration']}</p>";
}else{
	echo "<p>Can't find the film</p>";
}
?>
</body>
</html>
