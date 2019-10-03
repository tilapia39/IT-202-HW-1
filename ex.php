<html>
<head>
	<script>
	function pageLoaded(){

let myDiv = document.createElement('div');
myDiv.innerText = "New element added";

document.body.appendChild(myDiv);

}
</script>
</head>
<body onload="pageLoaded();">	
	<div>TEST</div>
	<p id="myPara">Loaded</p>
</body>
</html>