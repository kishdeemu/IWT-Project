function enableButton(){
	if (document.getElementById("check").checked)
	{
		document.getElementById("btn").disabled = false;
	}
	else
	{
		document.getElementById("btn").disabled = true;
	}
}