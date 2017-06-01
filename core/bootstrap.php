<?php

$config = require 'config.php';

require 'core/Router.php';
require 'core/database/Connections.php';
require 'core/database/QueryBuilder.php';

return new QueryBuilder(
	Connection::make($config['database'])
);