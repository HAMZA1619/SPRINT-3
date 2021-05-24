<?php

Class Forgot extends Controller 
{
	function index()
	{
 	 	
 	 	$data['page_title'] = "Forgot";

		  $user = $this->loadModel("user");
		  $user->selectUsermail($_POST);

		$this->view("forgot",$data);
	}

}