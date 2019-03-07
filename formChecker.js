function validate()
{
	let email = document.getElementById("email").value;
	let psswd = document.getElementById("psswd").value;

	if (email.length < 1)
	{
		alert("Please enter an email");
		return false;
	}

	else if(email.includes("@") == false || email.includes(".com") == false || email.length < 10)
	{
		alert("Not a valid email")
		return false;
	}
	else if (psswd.length < 1)
	{
		alert("Please enter a password");
		return false;
	}
	else
	{
		if (document.getElementById("7day").checked == false)
		{
			if (document.getElementById("3day").checked == false)
			{
				if (document.getElementById("overnight").checked == false)
				{
					alert("Please select a shipping option");
					return false;
				}
			}
		}
		else if (document.getElementById("harry_wand").checked == false)
		{
			if (document.getElementById("hermione_wand").checked == false)
			{
				if (document.getElementById("ron_wand").checked == false)
				{
					alert("Please select a product");
					return false;
				}
			}
		}
	}
}
