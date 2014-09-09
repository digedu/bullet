<?php

	/**
	 * Bullet Config
	 * ~~~~~~
	 * - A simple daily email script to help teams track work done and provoke discussion
	 * - https://github.com/digedu/bullet
	 * ~~~~~~
	 * Released under the MIT License
	 */

	return array
	(
		// Send email on the following days:
		'days'  => array('Mon','Tue','Wed','Thu','Fri'),

		// Send email to the following teams:
		'teams' => array
		(
			// Tech Team
			array
			(
				'subject' => "Tech Bullet Points ".date('D jS M'),
				'from'    => 'Tech Boss <tech-boss@acme.com>',
				'to'      => 'tech1@acme.com,tech2@acme.com,tech3@acme.com',
				'intro'   => 'If you have any bullet points "reply all" as needed:',
				'bullets' => array
				(
					'Reply with goals, concerns, ideas or completed tasks for today',
					'Write bullet points not paragraphs ;)',
					'Format bullet points like this',
				)
			),

			// Sales Team
			array
			(
				'subject' => "Sales Bullet Points ".date('D jS M'),
				'from'    => 'Sales Boss <sales-boss@acme.com>',
				'to'      => 'sales1@acme.com,sales2@acme.com,sales3@acme.com',
				'intro'   => 'If you have any bullet points "reply all" as needed:',
				'bullets' => array
				(
					"Share the prospects with whom you've moved closer to a sale today",
					"Share any other actions you've taken to grow acme.com",
					"Share any new developments, wins, objections, anecdotes, concerns, or epiphanies",
				)
			)
		)
	);
