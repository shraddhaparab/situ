<html>
<head>
<title>Permanent Account Number Code Validation with JavaScript</title>

<script language="JavaScript">

function pan_validate(pan)
{

var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;

if(regpan.test(pan) == false)
{

document.getElementById("status").innerHTML = "Permanent Account Number is not yet valid.";

}
else
{

document.getElementById("status").innerHTML = "You have entered a valid Permanent Account Number !";

}
}

</script>

<style type="text/css">
<!--
body {
background:#CCCCFF;
}

div {
width: 100%;
text-align: center;
margin-top:150px;
}

span {
color: #000099;
font: 8pt verdana;
font-weight:bold;
text-decoration:none;
}

input {
color: #000000;
background: #F8F8F8;
border: 1px solid #353535;
width:250px;
font: 8pt verdana;
font-weight:normal;
text-decoration:none;
margin-top:5px;
}
-->
</style>
</head>
<body>

<div>
<span id="status">Please enter a valid Permanent Account Number.</span><br>
<input type="text" name="pan" onkeyup="pan_validate(this.value);">
</div>

</body>
</html>

