<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<title><?=$title?></title>
</head>
<body>

<h1><?=$title?></h1>

<?php var_dump($books) ?>
<table>
	<tr>
		<th>Book _Id</th>
		<th>Title</th>
		<th>Year Published</th>
		<th>Num pages</th>
		<th>Format</th>
	</tr>
	<tr>
		<?php foreach ($books as $key => $row) {
			$field_name = 
		} 
		?>
    </tr>
</table>

</body>
</html>