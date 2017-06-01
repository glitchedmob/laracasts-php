<?php

class Connection
{
	public static function make($config)
	{
		try {
			return new PDO('mysql:host=localhost;dbname=mytodo', 'levi', '');
			
			return new PDO(
				$config['connection'] . ';dbname=' . $config['name'],
				$config['username'],
				$config['password'],
				$config['options']
			);
		} catch (PDOException $e) {
			echo '<pre>';
		    var_dump($e);
		    echo '</pre>';
		    die($e);
		}
	}
}