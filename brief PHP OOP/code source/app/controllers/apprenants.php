<?php 
Class Apprenants extends Controller
{
	function index()
	{
		$data['page_title'] = "Apprenants";

		$add = $this->loadModel("apprenant");
		$data['student'] = $add->selectApprenant();

		if(isset($_POST['save']))
 	 	{
 	 		$add->addApprenant($_POST);

 	 	}
		$this->view("apprenants",$data);
	}

}