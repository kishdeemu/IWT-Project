function check(from)
{
]if(from.userid.value == "abhi"&& from.paswrd.value=="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,9}"
	{
	 var myWindow = window.open("", "", "width=200,height=100");
	myWindow.document.write("<p>correct your passwerd</p>");
	check.focus();
}
	}
	else
	{
	alert("THE ADMINNAME AND PASSWORD YOU ENTERED DONT'T MATCH.")
	}
}