<?php
date_default_timezone_set('PRC');
$start_time = microtime();

/**
 * STE class: template engine
 */
class Ste
{
	public function layout($_tpl, $data = null, $default = 'layout')
	{
		include($default . '.html');
	}
}

/**
 * STE Index class
 */
class Index
{
	public function index_show()
	{
		$STE = new Ste();

		$STE->layout('index_show.html', $GLOBALS['start_time']);
	}
}

$Index = new Index();

$Index->index_show();
