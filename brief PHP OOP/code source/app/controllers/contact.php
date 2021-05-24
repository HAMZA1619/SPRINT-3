<?php

Class Contact extends Controller 
{
	function index()
	{	
		if(isset($_SESSION['user_id'])){
 	 	$data['page_title'] = "Contact Us";
		
		$this->view("contact",$data);
		
		}else{
			$data['page_title'] = "Login";
			$this->view("login",$data);
		}
	}


}