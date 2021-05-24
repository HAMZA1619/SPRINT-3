<?php

Class Home extends Controller 
{
	function index()
	{
     
        if (isset($_POST['home'])) {
                $_SESSION['user_id'] =$_POST['home'];
        }
        if(isset($_SESSION['user_id'])){

        $data['page_title'] = "Home";
        $student = $this->loadModel("apprenant");
	$data['student'] = $student->selectApprenant();

        $class = $this->loadModel("classes");
	$data['class'] = $class->selectClass();

        $user = $this->loadModel("user");
        $data['user']= $user->selectUser();

        $user->modifieUser($_POST);

        $user->resetPassword($_POST);

       $this->view("profile",$data);
     }else{
        $data['page_title'] = "Login";
        $this->view("login",$data);
}
      
    }}