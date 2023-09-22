<!Doctype htmL>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Login Page</title>
<style>
body
{
margin:0;
padding:0;
background: url(hd.jpg);
background-size:100%;
background-position:top;
font-family:Poppins;
}

.Loginbox
{
width:360px;
height:440px;
background:transparent;
color:black;
top:50%;
left:50%;
position:absolute;
outline:1px outset grey;
transform:translate(-50%,-50%);
box-sizing:border-box;
padding:70px 30px;
}

.Login
{
width:100px;
height:100px;
border-radius:50%;
position:absolute;
top:-50px;
left:calc(50% - 50px);
}

.h1
{
margin:0;
padding:0 0 20px;
font-size:25px;
}

.heading
{
font-family:Courier;
}

.Loginbox p
{
margin:0;
padding:0;
font-weight:bold;
}

.Loginbox span
{
font-family:Comic Sans MS;
color:grey;
}

.Loginbox input
{
width:100%;
margin-bottom:20px;
}

.Loginbox input[type="text"],input[type="password"]
{
border:none;
font-size:18px;
background:transparent;
outline:1px solid black;
height:40px;
color:black;<!---COLOR OF CURSOR & ENTERED TEXT--->
font-size:16px;
}

.Loginbox input[placeholder="Username"],input[placeholder="Password"]
{
font-size:18px;
}

.Loginbox input[value="LOGIN"]
{
font-family:Courier New;
font-style:bold;
}


.Loginbox input[type="submit"]
{
border:none;
outline:none;
height:40px;
background:lightblue;
font-weight:bold;
color:black;
font-size:24px;
border-radius:20px;
}

.Loginbox input[type="submit"]:hover
{
cursor:pointer;
color:black;
background:green;
}

.Loginbox a
{
text-decoration:none;
font-size:20px;
font-family:Courier New;
line-height:20px;
color:rgb(187,5,28);
font-weight:bold;
}

.Loginbox a:hover
{
color:green;
}



.home button
{
margin:0 0 0 85px;
font-family:Chiller;
border:none;
outline:none;
height:40px;
background:black;
font-weight:bold;
color:darkgrey;
font-size:30px;
border-radius:20px;
}

.home button:hover
{
cursor:pointer;
color:green;
background:black;
}
</style>
</head>

<body>
<div class="Loginbox">
<img src="log.jpg" class="Login">
<div class="heading"><h1 align=center>SIGN IN</h1></div>
<form action="Validation.php" method="POST">
<input type="text" name="user" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<input type="submit" name="" value="LOGIN">
<br><br>
<p><span>&nbsp&nbsp&nbsp&nbsp&nbspDidn't sign in yet? </span><a href="SignupT.php">SIGN UP</a></p>
</form>
<div class="home">
<br><br><br><BR><BR>
<form action="HPage.php">
<button class="btn" >&nbsp<i class="fa fa-home"></i> HOME&nbsp</button>
</form>
</div>
</div>
</body>
</html>
