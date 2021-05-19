<?php

Class Home extends Controller 
{
	function index()
	{
        $data['page_title'] = "Home";

        $user = $this->loadModel("user");
        $data['user']= $user->selectUser();
        $user->modifieUser($_POST);
  
       $this->view("profile",$data);
    }}