<?php
try{
    $conn = new PDO('mysql:host=localhost;dbname=cit2202', 'cit2202', 'letmein');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}


//This is a simple example we would normally do some form validation here

//basic form processing
//look at the form controls in create.php for where these values ($_POST['title'], $_POST['year'] etc.) come from
$title = $_POST['title'];
$year = $_POST['year'];
$duration = $_POST['duration'];
$certId = $_POST['certificate'];


//SQL INSERT for adding a new row
//Use a prepared statement to bind the values from the form
$query = "INSERT INTO films (id, title, year, duration, certificate_id) VALUES (NULL, :title, :year, :duration, :certId)";
$stmt = $conn->prepare($query);
$stmt->bindValue(':title', $title);
$stmt->bindValue(':year', $year);
$stmt->bindValue(':duration', $duration);
$stmt->bindValue(':certId', $certId);
$stmt->execute();
$conn = NULL;
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Save film</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php
echo "<p>Added the details for {$title}.</p>"
?>
</body>
</html>
