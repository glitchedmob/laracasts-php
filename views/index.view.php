<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Document</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			header {
				background-color: grey;
				padding: 3em;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<h1>Task for the day</h1>
		<ul>
			<?php foreach($tasks as $task) : ?>
				<?php if($task->completed) : ?>
					<strike><li><?= $task->description; ?></li></strike>
				<?php else: ?>
					<li><?= $task->description; ?></li>					
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
	</body>
</html>