<?php

Class Home extends Controller 
{
	function index()
	{
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
    }}