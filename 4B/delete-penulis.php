<?php
  include ('conn.php' );

  $id = $_GET['id'];

	$sql = "DELETE FROM penulis WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
	  echo "Record deleted successfully";
	   echo "<a href='/'>Kembali</a>";
	} else {
	  echo "Error deleting record: " . $conn->error;
	}

	$conn->close();

?>