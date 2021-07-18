<?php
require 'header.php';
?>
<head>
	<style >
		body 
		{ 
		   
           font-family:calibri, Helvetica, sanserif;
           background-color: grey;
		}
		* {
			  box-sizing: border-box;
			}

		form 
		{
			width: 100;
			height:100;

			border: 6px solid #f1f1f1;
		}

		input[type=text],input[type=password],input[type=email]
		{
			width: 100%;
			padding: 10px 18px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;

		}

		button
		{
           background-color: #4CAF50;
           color: white;
           padding: 14px 20px;
           margin: 8px 0;
           border:none;
           cursor: pointer;
           width:25%;
		}

		button:hover
		{
			opacity: 0.8;
		}

         .avatar
         {
         	vertical-align: middle;
         	width: 50px;
         	border-radius: 50%;
         }
		.cancelbtn
		{
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
		}

		.imgcontainer
		{
			text-align: center;
			margin: 24px 0 12px 0;
		}

		

		.container
		{
			padding: 16px;
			background-color: white;

		}
</style>

</head>
<body>
<div class = "container">
<div>
<center><div><h1>Register your Account</h1></div></center>
</div>
<form action = 'backend.php' method = 'POST'>
<div class = "container">
<div class="form-group">
<label>Username:</label>
<input class = 'form-control w-50' type="text" name="username" required>
<label>Email:</label>
<input class = 'form-control w-50' type="email" name="email" required>
<div>
<label>Password:</label>
<input class = 'form-control w-50' type="password" name="password" required>
</div>
<div class ='text-center mt-3 w-50'>
<center><button class = 'btn btn-outline-info' type = 'submit' value = 'submit' name= 'register'>Submit</button></center>
</div>
</div>
</div>
</form>
</div>
</body>
</html>