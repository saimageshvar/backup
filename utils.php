<?php
	
	//check valid registration
	function checkRegistration()
	{
		if(isset($_SESSION['registration']))
		{
			if($_SESSION['registration'] == "failure")
			{
			?>
			<script>alert('Your registration failed');</script>
			<?php
			}
			else if($_SESSION['registration'] == "success")
			{
			?>
			<script>alert('<?php echo $_SESSION['user_id'] ?>');</script>
			<?php
			}
			unset($_SESSION['registration']);
		}
	}
	
	//check login
	function checkLogin()
	{
		if(isset($_SESSION['login']))
		{
			if($_SESSION['login'] == "failure")
			{
			?>
			<script>alert('Your login failed');</script>
			<?php
			}
			else if($_SESSION['login'] == "success")
			{
			?>
			<script>alert('<?php echo $_SESSION['user']['_id'] ?>');</script>
			<?php
			}
			unset($_SESSION['login']);
		}
		
	}
	
	//checkSA
	function checkSA()
	{
		if(isset($_SESSION['SARegistration']))
		{
			if($_SESSION['SARegistration'] == "failure")
			{
			?>
			<script>alert('Your SA registration failed');</script>
			<?php
			}
			else if($_SESSION['SARegistration'] == "success")
			{
			?>
			<script>alert('Your SA registration is successful');</script>
			<?php
			}
			unset($_SESSION['SARegistration']);
		}
		
	}
	
	
?>