<?php
class wet_sample_comments_saved
{
	function __construct()
	{
		register_callback(array(__CLASS__ , 'run'), 'comment.saved');
	}

	function run($event, $step, $comment)
	{
		dmp($comment);
		die("{$comment['name']} came from {$comment['ip']}");
	}
}

if (txpinterface == 'public') new wet_sample_comments_saved;
