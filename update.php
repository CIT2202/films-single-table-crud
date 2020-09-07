<?php
try{
    $conn = new PDO('mysql:host=localhost;dbname=examples', 'cit2202', 'letmein');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

//This is a simple example we would normally do some form validation here

//basic form processing
$id=$_POST['id'];
$title=$_POST['title'];
$year=$_POST['year'];
$duration=$_POST['duration'];
$certId=$_POST['certificate'];
$msg="";

//SQL UPDATE to change a row in the films table
$query="UPDATE films SET title=:title, year=:year, duration=:duration, certificate_id=:certId WHERE id=:id";
$stmt=$conn->prepare($query);
$stmt->bindValue(':id', $id);
$stmt->bindValue(':title', $title);
$stmt->bindValue(':year', $year);
$stmt->bindValue(':duration', $duration);
$stmt->bindValue(':certId', $certId);
$stmt->execute();

if($stmt->execute()){
    $msg="<p>Successfully updated the details for {$title}</p>";
}else{
    $msg="<p>There was a problem.</p>";
}

$conn=NULL;
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Update film record</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php
echo $msg;
?>
</body>
</html>
