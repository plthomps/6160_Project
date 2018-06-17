function signUpClick(){
	document.getElementById('signInRect').style.display = 'none';
	document.getElementById('signUpRect').style.display = 'block';
}

function signInClick(){
	document.getElementById('signUpRect').style.display = 'none';
	document.getElementById('signInRect').style.display = 'block';
}

function signIn(){
	window.location.href="./dashboard.php";
}

function logOut(){
	window.location.href="./index.php";
}

