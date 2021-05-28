<?php

Class Regester extends Controller 
{
	function index()
	{
 	 	
 	 	$data['page_title'] = "Regester";

		//   $user = $this->loadModel("user");
		//   $user->selectUsermail($_POST);
        $sall = $this->loadModel("classes");
		$data['sall'] = $sall->selectClass();
        $add = $this->loadModel("apprenant");
		if(isset($_POST['save']))
 	 	{
 	 		$add->addApprenant($_POST);

 	 	}
		$this->view("regester",$data);
	}

}