<?php

Class Forgot extends Controller 
{
	function index()
	{
 	 	
 	 	$data['page_title'] = "Forgot";
		$this->view("forgot",$data);
	}

}