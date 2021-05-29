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
       
		if(isset($_POST['save']))
 	 	{
			$add = $this->loadModel("apprenant");
 	 		$add->addApprenant($_POST,$_FILES);

 	 	}
		$this->view("regester",$data);
	}

}