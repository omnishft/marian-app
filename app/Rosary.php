<?php

Class Rosary
{
	public $prayer_order = [];
	
	public function add_prayers(Prayer $prayer) 
	{
		$this->prayer_order[] = $prayer;
	}

}
