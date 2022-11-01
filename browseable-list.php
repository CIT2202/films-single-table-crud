<?php
try{
    $conn = new PDO('mysql:host=localhost;dbname=cit2202', 'cit2202', 'letmein');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

$query = "SELECT * FROM films"; //SQL to select all the films
$resultset = $conn->query($query);
$films = $resultset->fetchAll(); //use fetchAll(), we need multiple films
$conn=NULL;

?>
<!DOCTYPE HTML>
<html>
<head>
<title>List the films</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<ul>
<?php

//loop over the array of films
foreach ($films as $film) {
    echo "<li>";
    // for each film create a hyperlink that features the film's id in the query string
    // e.g. <a href='details.php?id=2'>Winter's Bone</a>
    echo "<a href='details.php?id={$film["id"]}'>{$film["title"]}</a>";
    echo "</li>";
}

?>
</ul>
</body>
</html>
