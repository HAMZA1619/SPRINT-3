<?php

Class Contact extends Controller 
{
	function index()
	{	
		
 	 	$data['page_title'] = "Contact Us";
		  $user = $this->loadModel("user");
		  $user->contact($_POST);
		
		$this->view("contact",$data);
		
	
	}


}