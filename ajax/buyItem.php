<?php
$shipId = $_POST["shipId"]+1;
$item = $_POST["item"];
$count = $_POST["count"] + 1;
include("../connect.php"); //establish database connection   

if ($item == "schiffswandverstaerkung") {
	$sql = "UPDATE ship SET max_hp = max_hp + 100 WHERE id=$shipId";

	if ($conn->query($sql) === TRUE) {

	    $sql = "UPDATE inventory SET $item='$count' WHERE shipId=$shipId";

		if ($conn->query($sql) === TRUE) {
		    echo true;
		} else {
		    echo $conn->error;
		}

	} else {
	    echo $conn->error;
	}
}
else {
	$sql = "UPDATE inventory SET $item='$count' WHERE shipId=$shipId";

	if ($conn->query($sql) === TRUE) {
	    echo true;
	} else {
	    echo $conn->error;
	}
}

$conn->close();
?>