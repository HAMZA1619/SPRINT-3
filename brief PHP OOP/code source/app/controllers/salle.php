<?php 
Class Salle extends Controller
{
	function index()
	{
		if(isset($_SESSION['user_id'])){
		$data['page_title'] = "Salle";

		$add = $this->loadModel("classes");
		$data['salle'] = $add->selectClass();
		$stud = $this->loadModel("apprenant");
		$data['student'] = $stud->selectApprenant();

		if(isset($_POST['save']))
 	 	{
 	 		$add->addClass($_POST);

 	 	}
		$this->view("salle",$data);
	  }
	 else{
		$data['page_title'] = "Login";
		$this->view("login",$data);
	}
	}

}