<function com() {
	var xmlhttp;
	xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET","php/insert.php?nm=" + document.getElementsById('name').value + 
		"$em="+document.getElementsById('email').value +
		"$cm="+document.getElementsById('comment').value ,false);
	xmlhttp.send(null);

}