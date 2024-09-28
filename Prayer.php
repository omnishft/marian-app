<?php

Class Prayer
{
	public $title;
	public $text;

	public function __construct(string $title,string $text)
	{
		$this->title = $title;
		$this->body = $text;
	}
}
