<?php

/**
 * analytics install
 */

function analytics_install()
{
	$query = 'INSERT INTO ' . PREFIX . 'modules (name, alias, author, description, version, status, access) VALUES (\'Analytics\', \'analytics\', \'Redaxmedia\', \'Integrates Goggle Analytics\', \'1.3\', 1, 0)';
	mysql_query($query);
}

/**
 * analytics uninstall
 */

function analytics_uninstall()
{
	$query = 'DELETE FROM ' . PREFIX . 'modules WHERE alias = \'analytics\' LIMIT 1';
	mysql_query($query);
}
?>