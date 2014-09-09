<?php

	/**
	 * Bullet
	 * ~~~
	 * - A simple daily email script to help teams track work done and provoke discussion
	 * - https://github.com/digedu/bullet
	 * ~~~
	 * Released under the MIT License by digedu
	 */

	// Grab config
	$config = include "config.php";

	// Only send email on configured days
	if ( ! in_array(date('D'),$config['days']) ) {
		exit;
	}

	// Send bullet points email
	foreach ( $config['teams'] as $team => $members) {
		
		$message = "{$members['intro']}\n\n";
		
		foreach ( $members['bullets'] as $bullet ) {
			$message .= "- {$bullet}\n";
		}

		if ( isset($argv[1]) && $argv[1] == 'debug' ) {
			echo "\n";
			echo "From: {$members['from']}\n";
			echo "To: {$members['to']}\n";
			echo "{$members['subject']}\n";
			echo "$message\n\n";
		} else {
			mail($members['to'],$members['subject'],$message,'From: '.$members['from']);
		}
		
	}