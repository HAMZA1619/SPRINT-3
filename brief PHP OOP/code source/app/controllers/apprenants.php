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
		$data['salle'] = $ad->selectClass();

		$this->view("apprenants",$data);
	}
	else{
		$data['page_title'] = "Login";
		$this->view("login",$data);
	}

	}

}