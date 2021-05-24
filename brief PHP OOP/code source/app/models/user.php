<?php 

Class User 
{

	function login($POST)
	{
		$DB = new Database();

		$_SESSION['error'] = "";
		if(isset($POST['login']))
		{

			$arr['username'] = trim(strip_tags($POST['username']));

			$query = "select * from user where username = :username limit 1 ";
			$data = $DB->read($query,$arr);
			if(is_array($data))
			{ 
 				if(password_verify($POST['password'], $data[0]->password) ) {
 				$_SESSION['user_name'] = $data[0]->username;
				$_SESSION['user_id'] = $data[0]->id;
	
				header("Location:". ROOT . "home");
				die;
				  }else{
					$_SESSION['error'] = "wrong username or password";
				  }
			}
		}else{

			$_SESSION['error'] = "please enter a valid username and password";
		}

	}


	function signup($POST)
	{

		$DB = new Database();

		$_SESSION['error'] = "";
		if(isset($POST['signup']) )
		{

			$arr['username'] = trim(strip_tags($POST['username']));
			$arr['password'] = password_hash(trim(strip_tags($POST['password'] )),PASSWORD_BCRYPT);  
			$arr['email'] = trim(strip_tags($POST['email']));
			$arr['date'] = date("Y-m-d H:i:s");

			$query = "insert into user (username,password,email,date) values (:username,:password,:email,:date)";
			$data = $DB->write($query,$arr);
			if($data)
			{
				
				header("Location:". ROOT . "login");
				die;
			}

		}else{

			$_SESSION['error'] = "please enter a valid username and password";
		}
	}
	function selectUser(){
		$DB = new Database();
		$arr['id'] =$_SESSION['user_id'];
			$query = "select * from user where id = :id";
			$data = $DB->read($query,$arr);
			if(is_array($data))
		   {
			return $data;
			
		    }
			return false;
    }

	function selectUsermail($POST){
		$DB = new Database();
		$_SESSION['error'] = "";
		if(isset($POST['reset']) )
		{
		$arr['email'] =$POST['email'];
			$query = "select * from user where email = :email";
			$data = $DB->read($query,$arr);
			if(is_array($data))
		   {
			require "../app/core/mail.php";
			$mail->setFrom('hamzaelg32@gmail.com', 'Gestion Des Apprenants');
			$mail->addAddress($data[0]->email);
			$mail->Subject = 'Reset Password';
			$mail->Body    = '<b>Please Click here and log to your profile</b><br>
			 <form action="'. ROOT .'home" method="post"><button type="submit" name="home" 
			 style="background-color: #2ada50;" value="'.$data[0]->id.'">Login</button></form>
			';
				
			$mail->send();

			$_SESSION['error'] = "check your mail box";

    }else{
		$_SESSION['error'] = "please enter a valid email";
	}
}}

	
	
	function modifieUser($POST)
	{

		$DB = new Database();
		if(isset($POST['update']))
		{
			$arr['id'] =$_SESSION['user_id'];
			$arr['username'] = $POST['username'];
			$arr['email'] = $POST['email'];
			$arr['date'] = date("Y-m-d H:i:s");

			$query = "UPDATE  user SET username= :username ,email =:email,date = :date WHERE id = :id ";
			$data = $DB->write($query,$arr);
			if(is_array($data))
			{
				return true;
			}
			$page = $_SERVER['PHP_SELF'];
			$sec = "0.01";
			header("Refresh: $sec; url=$page"); 
		}

		return false;

	}


	function resetPassword($POST)
	{

		$DB = new Database();
		if(isset($POST['reset']))
		{
			$arr['id'] =$_SESSION['user_id'];
			$arr['password'] =password_hash(trim(strip_tags($POST['password'] )),PASSWORD_BCRYPT);  
			$arr['date'] = date("Y-m-d H:i:s");

			$query = "UPDATE  user SET password= :password ,date = :date WHERE id = :id ";
			$data = $DB->write($query,$arr);
			if(is_array($data))
			{
				return true;
			}
		}

		return false;

	}

	function logout()
	{
		
		unset($_SESSION['user_name']);
		unset($_SESSION['user_id']);

		header("Location:". ROOT . "login");
		die;
	}


}