<?php
try{
    $conn = new PDO('mysql:host=localhost;dbname=cit2202', 'cit2202', 'letmein');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

//the id from the radio buttons in the form
$filmId=$_POST['id'];
//prepared statement uses the id to select a single film
$stmt = $conn->prepare("SELECT * FROM films WHERE films.id = :id");
$stmt->bindValue(':id',$filmId);
$stmt->execute();
$film=$stmt->fetch();
$conn=NULL;

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Edit the film details</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<h1>Edit film details</h1>
<form action="update.php" method="post">

<!-- <input type="hidden"> creates a hidden text field i.e. not visible to the user
	we use it to store the id number of the selected film -->
<input type="hidden" name="id" value="<?php echo $film["id"];?>">

<div>
<label for="title">Title:</label>
<input type="text" id="title" name="title" value="<?php echo $film["title"];?>">
</div>
<div>
<label for="year">Year:</label>
<input type="text" id="year" name="year" value="<?php echo $film["year"];?>">
</div>
<div>
<label for="duration">Duration:</label>
<input type="text" id="duration" name="duration" value="<?php echo $film["duration"];?>">
</div>
<div>
<p>Please enter an id number for the certificate. 1 = U, 2 = PG, 3 = 12, 4 = 15, 5 = 18. We will look at a better way of doing this later in the course.</p>
<label for="certificate">Certificate:</label>
<input type="text" id="certificate" name="certificate" placeholder=" e.g. 2 for PG" value="<?php echo $film["certificate_id"];?>">
</div>

<input type="submit" name="submitBtn" value="Update film details">
</form>

</body>
</html>
