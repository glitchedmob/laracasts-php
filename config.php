<?php

return [
	'database' => [
		'name' => 'mytodo',
		'username' => 'levi',
		'pwassword' => '',
		'connection' => 'mysql:host=localhost',
		'options'=> [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]
];