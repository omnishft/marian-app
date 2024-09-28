<?php

Class Mysteries
{
	public $title;
	public $citation;
	public $text;
	public $assigned_date;
	public function __construct(string $title,string $citation,string $text, string $date)
	{
		$this->title = $title;
		$this->citation= $citation;
		$this->text = $text;
		$this->date = $date;
	}
	public function get_author(): string
	{
		return $this->title; 
	}
}
