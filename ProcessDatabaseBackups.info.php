<?php namespace ProcessWire;

$info = array(
	"title" => __('Database Backups: RPS mod', __FILE__),
	"summary" => __('Create and/or restore database backups from ProcessWire admin.', __FILE__),
	"version" => '0.2.6', // RPS version as middle number,
	"author" => "Ryan Cramer",
	"href" => 'https://github.com/Toutouwai/ProcessDatabaseBackups', // RPS mod
	"icon" => "database", 
	"requires" => "ProcessWire>=3.0.62", 
	"permission" => "db-backup",
	"permissions" => array(
		"db-backup" => "Manage database backups (recommended for superuser only)" 
	),
	"page" => array(
		"name" => "db-backups",
		"parent" => "setup", 
		"title" => "DB Backups"
	),
	"nav" => array(
		array( 
			"url" => "./", 
			"label" => __('View', __FILE__), 
			"icon" => "list" 
		),
		array(
			"url" => "backup/", 
			"label" => __('Backup', __FILE__), 
			"icon" => "plus-circle" 
		),
		array(
			"url" => "upload/", 
			"label" => __('Upload', __FILE__), 
			"icon" => "cloud-upload" 
		)
	)
);
