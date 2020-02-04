<?php
	include 'database.php';
	$query = "SELECT * FROM professors ORDER BY professor";
	$professors = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> UF Professor Recommendations </title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Work+Sans:400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/update.css">
</head>

<body>
<div id="tablepage">

<h1>UF Professor Recommendations</h1>
<br><p>Here are all of the professors that students have recommended so far.</p><br>

<table id="table">
	<!-- table column headings -->
	<tr>
	  <th>Professor</th>
	  <th>Class</th>
	  <th>Reason</th>
	</tr>

<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
     Each time it loops, it writes ONE ROW.
	 This code depends on the first 5 lines at the start of this file.
	 $socks comes from that code.
	 NOTE all form controls must have a name= attribute.
     -->
<?php while ($row = mysqli_fetch_assoc($professors)) :  ?>

<tr>
  <td><?php echo stripslashes($row['professor']); ?></td>
  <td><?php echo stripslashes($row['class']); ?></td>
  <td><?php echo stripslashes($row['why']); ?></td>
</tr><!-- end of HTML table row -->

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>
<!-- close the form -->

<br><p class="middle"><a href="enter_new_record.php">Know a professor you'd like to recommend? Add them here!</a></p><br>

</div> <!-- close container -->
</body>
</html>
