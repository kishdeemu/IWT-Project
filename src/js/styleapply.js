function enableButton(){
	if (document.getElementById("check").checked)
	{
		document.getElementById("REGISTER").disabled = false;
	}
	else
	{
		document.getElementById("REGISTER").disabled = true;
	}
}