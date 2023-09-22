<!Doctype htmL>
<head><title>Signup Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

.Signup
{
width:360px;
height:470px;
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

.Logup
{
width:100px;
height:100px;
border-radius:50%;
position:absolute;
top:-50px;
left:calc(50% - 50px);
}

.heading p
{
margin:0;
padding:0 0 20px;
font-size:25px;
font-family:Comic Sans MS;
color:grey;
}

.heading
{
font-family:Courier;
}




.Signup input
{
width:100%;
margin-bottom:20px;
}

.Signup input[type="text"],input[type="password"],input[type="email"]
{
border:none;
font-size:18px;
background:transparent;
outline:1px solid grey;
height:40px;
color:black;<!---COLOR OF CURSOR & ENTERED TEXT--->
font-size:16px;
}

.Signup input[placeholder="Username"],input[placeholder="Password"]
{
font-size:18px;
}

.Signup input[value="SIGN UP"]
{
font-family:Courier New;
font-style:bold;
}


.Signup input[type="submit"]
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

.Signup input[type="submit"]:hover
{
cursor:pointer;
color:black;
background:green;
}

.Signup a
{

text-decoration:none;
border-radius:10px;
font-size:20px;
font-family:Courier New;
line-height:20px;
color:green;
font-weight:bold;
}

.Signup a:hover
{
color:rgb(158,191,0);

}

.Signup span
{
font-size:18px;
font-family:Comic Sans MS;
color:grey;
}


.home button
{
margin:0 0 0 95px;
font-family:Chiller;
content-align:cover;
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
<div class="Signup">
<img src="log.jpg" class="Logup">
<div class="heading"><p align=center>Sign Up to use Online Dictionary</p></div>
<form action="registration.php" method="POST">
<input type="text" name="user" placeholder="Name" required>
<input type="email" name="email" placeholder="E-mail" required>
<input type="password" name="password" placeholder="Password" required>
<input type="submit" name="" value="SIGN UP">
<br><br><br>
<span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAlready Signed In?&nbsp</span><a href="LoginT.php">LOGIN</a>
<br><br><br>
</form>
<div class="home">
<form action="Hpage.php">
<button class="btn" ><i class="fa fa-home"></i> HOME</button>
</div></form>
</div>
</body>
</html>