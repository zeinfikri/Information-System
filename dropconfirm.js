function DropConfirm()
	{
		var answer = confirm("Are you sure want to drop?");
		
		if(answer)
			{
				window.location="delete.php";
				return true;	
			}
		else
			{
				window.location="home.php";
				return false;
			}
	}