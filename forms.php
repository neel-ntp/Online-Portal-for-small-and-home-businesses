<html>
<head>
<title>..</title>
<style>
	#Alter{
	position: relative;
	margin: 5% auto;
	height: 500px;
	width: 100%;
	background: white;
	
}
	.container
		{
			padding: 16px;
			background-color: white;

		}
	button:hover
	{
		opacity: 0.8;
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

     input[type=text],input[type=password],input[type=email],input[type=Number]
		{
			width: 25%;
			padding: 10px 18px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: left-box;

		}
	form 
		{
			width: 25;
			height:25;

			border: 6px solid #f1f1f1;
		}
		.leftbox 
		{
			position: absolute;
			top: 60;
			left:30;
			
			box-sizing: border-box;
			padding: 40px;
			width: 25%;
			height: 400px;
		}
		.right-box 
		{
		position: absolute;
		top: -10;
		right: -60;
		box-sizing: border-box;
		padding: 40px;
		width: 25%;
		height: 25%;
		background-size: cover;
		background-position: center;
		}
</style>
</head>
<body>
	<div id="Alter">
	<div class="left-box" align="left">
		<div class = "container">
			<div class="form-group">
			<label>Product Id:</label>
			<input class = 'form-control w-50' type="text" name="pid" required>
			<div>
			<label>New Quantity:</label>
			<input class = 'form-control w-50' type="email" name="quantity" required>
			</div>
			<div class ='text-center mt-3 w-50'>
				<left><button class = 'btn btn-outline-info' type = 'update' value = 'update' name= 'update'>Update</button></left>
			</div>
			</div>
		</div>
	</div>

	
		<div class="right-box">
		<div class = "container">
			<div class="form-group">
			<label>Product Id:</label>
			<input class = 'form-control w-50' type="text" name="pid" required>
			<div class ='text-center mt-3 w-50'>
				<button class = 'btn btn-outline-info' type = 'delete' value = 'delete' name= 'delete'>Delete</button>
			</div>
			</div>
		</div>
	</div>
	</div>

</body>
</html>