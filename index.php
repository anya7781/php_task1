<?php

	$array = [];
	for ($j = 0; $j < 10; $j++){
		array_push($array, "item".$j);
	}

?>

<!DOCTYPE html>
<html lang="rus">
	<head>
		<title>Task1</title>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="style.css" />
	</head>

	<body>
		<div class="grid">
				<div class="grid-item grid-item1">
					<?php
						for ($i = 0; $i < count($array); $i++){
							if ($i % 2 != 0){
								echo "<b class = 'index'>".$i.".</b> ";
								echo $array[$i]."<br>";
							}
						}
					?>
				</div>

				<div class="grid-item grid-item2">
					<?php
						for ($i = 0; $i < count($array); $i++){
							if ($i % 2 == 0){
								echo "<b class = 'index'>".$i.".</b> ";
								echo $array[$i]."<br>";
							}
						}
					?>
				</div>
		</div>
	</body>


</html>