<?php

require 'functions.php';
require 'Task.php';

$pdo = connectToDb();

$tasks = fectchAllTasks($pdo);

require 'index.view.php';