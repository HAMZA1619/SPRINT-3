<?php 
Class Apprenants extends Controller
{
	function index()
	{
		if(isset($_SESSION['user_id'])){
		$data['page_title'] = "Apprenants";

		$add = $this->loadModel("apprenant");
		$data['student'] = $add->selectApprenant();

		$ad = $this->loadModel("classes");
		$data['sall'] = $ad->selectClass();

		if(isset($_POST['save']) && isset($_FILES['file']))
		{
			$add->addApprenant($_POST,$_FILES);

		}

		$this->view("apprenants",$data);
	}
	else{
		$data['page_title'] = "Login";
		$this->view("login",$data);
	}

	}

}