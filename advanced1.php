<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="A really awesome site!">
	<title>PHP Assignment</title>

	<link rel="stylesheet" href="advanced1.css">


</head>

<body>
	
	<table>
		<thead>
			<th>User #</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Full Name</th>
			<th>Full Name in Upper Case</th>
			<th>Length of Name</th>
		</thead>
		<tbody>
			<?php
			// Create a program that outputs an HTML table given a multidimensional, associative array
			
			$users = array( 
			   array('first_name' => 'Michael', 'last_name' => ' Choi '),
			   array('first_name' => 'John', 'last_name' => 'Supsupin'),
			   array('first_name' => 'Mark', 'last_name' => ' Guillen'),
			   array('first_name' => 'KB', 'last_name' => 'Tonel'),
			   array('first_name' => 'Chris', 'last_name' => 'Kaundart'),
			   array('first_name' => 'Dexter', 'last_name' => 'Clark'),
			   array('first_name' => 'Aaron', 'last_name' => 'Young'),
			   array('first_name' => 'Dan', 'last_name' => 'Basinski'),
			   array('first_name' => 'Randall', 'last_name' => 'Frisk'),
			   array('first_name' => 'Matt', 'last_name' => 'Barkley'),
			   array('first_name' => 'Andrew', 'last_name' => 'Luck'),
			   array('first_name' => 'Dennis', 'last_name' => 'Dixon'),
			   array('first_name' => 'Nick', 'last_name' => 'Foles'),
			   array('first_name' => 'Marcus', 'last_name' => 'Mariota'),
			   array('first_name' => 'Kevin', 'last_name' => 'Hogan')
			); 

			$id = 1;

				foreach ($users as $user) {
					$first = trim($user['first_name']);
					$last = trim($user['last_name']);
					$full = $first . " " . $last;
					echo "<tr";
					if ($id % 5 == 0) {
						echo " class='bg'";
					}

					echo "><td>" . $id . "</td>";
					
					foreach ($user as $key => $value) {
						trim($value);
						echo "<td>" . $value . "</td>";
					}
					
					echo "<td>" . $full . "</td>";
					echo "<td>" . strtoupper($full) . "</td>";
					echo "<td>" . strlen($full) . "</td>";

					echo "</tr>";
					$id += 1;
				}

			?>
		</tbody>
	</table>

</body>

</html>
