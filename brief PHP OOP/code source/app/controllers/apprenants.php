<?php 
Class Apprenants extends Controller
{
	function index()
	{
		if(isset($_SESSION['user_id'])){
		$data['page_title'] = "Apprenants";

		$add = $this->loadModel("apprenant");
		$data['student'] = $add->selectApprenant();

		$sall = $this->loadModel("classes");
		$data['sall'] = $sall->selectClass();

		if(isset($_POST['save']))
 	 	{
 	 		$add->addApprenant($_POST);

 	 	}
		$this->view("apprenants",$data);
	}
	else{
		$data['page_title'] = "Login";
		$this->view("login",$data);
	}

	}

}