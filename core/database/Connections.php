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
			dd($e);
		}
	}
}