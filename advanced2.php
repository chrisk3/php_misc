<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="A really awesome site!">
	<title>PHP Assignment</title>

	<link rel="stylesheet" href="advanced2.css">


</head>

<body>
	
	<table>
		
		<?php
		    // Write a program that generates an HTML table that looks like an 8x8 checkboard.

			$row_cnt = 0;
			$cell_cnt = 0;

			for ($row = 1; $row < 9; $row++) 
			{
				echo "<tr>";

				for ($col = 1; $col < 9; $col++)
				{
					if ($cell_cnt % 2 == $row_cnt % 2)
					{
						echo "<td class='red'></td>";
					}
					else
					{
						echo "<td class='black'></td>";
					}

					$cell_cnt += 1;
				}

				echo "</tr>";
				$row_cnt += 1;
			}

		?>

	</table>

</body>

</html>
