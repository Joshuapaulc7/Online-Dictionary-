<!doctype html>
<head>
<style>
body
{
margin:10px;
padding:0 0 0 60px;
background: url(hd.jpg);
background-size:100%;
background-position:top;
font-family:Poppins;
}

h1
{
margin:0;
font-family:Courier;

padding:0 0 20px;
font-size:120px;

animation-name:example;
animation-duration:2.5s;
animation-iteration-count:infinite;
}
button
{
text-decoration:none;
font-size:90px;
font-family:Courier New;
line-height:90px;
color:black;
border:outset;
outline:groove solid lightblue;
background:lightblue;
}
button:hover
{
cursor:pointer;
color:lightblue;
background:black;

}
table
{
padding:0 0 0 50px;
}
p
{
position: absolute;
  bottom: 40px;
  right: 40px;
font-size:24px;
font-weight:bold;
font-family:Courier;
text-transform:uppercase;
color:darkblue;
}

@keyframes example
{
0%
{color:rgb(182,128,64);}

50%
{color:rgb(47,79,79);}

100%
{color:rgb(220,167,27);}
}

</style>
</head>
<body>
<h1 align=center>ONLINE DICTIONARY</h1>
<br><br><br><br><br><br>
<table align=center>
<form align=center action="loginT.php">
<tr>
<td><button >LOGIN</button>&nbsp
</form>
</td>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
<td>
<form align=center action="SignupT.php">
<button >SIGN UP</button>&nbsp
</form>
</td>
</tr>
</table>
</body>
<p>Joshua Paul C<br>1MJ19CS075</p>
</html>