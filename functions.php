<?php

function dd($valuToDump) {
	echo '<pre>';
	var_dump($valuToDump);
	echo '</pre>';
	die();
}

function connectToDb() {
	try {
		return $pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'levi', '');
	} catch (PDOException $e) {
		dd($e);
	}
}

function fetchAllTasks($pdo) {
	$sql = $pdo->prepare('SELECT * FROM todos');

	$sql->execute();

	return $sql->fetchAll(PDO::FETCH_CLASS, 'Task');
}