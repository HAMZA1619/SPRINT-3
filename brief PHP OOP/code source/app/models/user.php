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
 				if(password_verify($POST['password'], $data[0]->password) || $POST['password']== $data[0]->password ) {
 				
				$_SESSION['user_id'] = $data[0]->id;
				$_SESSION['user_role'] = $data[0]->role;
	
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
			$arr['role'] = "user";
			$arr['date'] = date("Y-m-d H:i:s");

			$query = "insert into user (username,password,email,role,date) values (:username,:password,:email,:role,:date)";
			$data = $DB->write($query,$arr);
			if($data)
			{
				if($arr['role'] == "user"){
				 header("Location:". ROOT . "std_profile");	
				}else{
			     header("Location:". ROOT . "login");
				}
				
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
			require "../app/core/mailer/mail.php";
			$mail->setFrom('hamzaelg32@gmail.com', 'Gestion Des Apprenants');
			$mail->addAddress($data[0]->email);
			$mail->Subject = 'Reset Password';
			$mail->Body    = '<b>Username :</b> '.$data[0]->username.'<br>
                             <b>Password :</b> '.$data[0]->password.'';
				
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
		
	
		unset($_SESSION['user_id']);

		header("Location:". ROOT . "login");
		die;
	}





function contact($POST){
	$_SESSION['error'] = "";
	if(isset($POST['contact']) )
	{	
		require "../app/core/mailer/mail.php";
		$mail->setFrom($POST['Email'], $POST['Nom']);
		$mail->addAddress('hellnot127@gmail.com');
		$mail->Subject = $POST['Object'];
		$mail->Body    = $POST['Email']."  ".$POST['Massege'];
			
		$mail->send();

		echo  "<script>alert('email has been send')</script> ";
    }else{
		echo "<script>alert('error email isn't send')</script> ";}
}

}?>
