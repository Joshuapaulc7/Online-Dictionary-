<?php

session_start();
if(!isset($_SESSION['username']))
{
header('location:LoginT.php');
}

?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">  
    <title>Online Dictionary</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN Link for Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'cooper', sans-serif;
}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: url(hd.jpg);
}
::selection{
  color: rgb(203,145,72);
  background: lightblue;
}
.wrapper{
align-content:center;
  width: 550px;
  border-radius: 7px;
  background: black;
  padding: 80px 28px 45px;
  box-shadow: 7px 7px 20px rgba(0, 0, 0, 0.05);
}
.wrapper header{
color:rgb(203,145,72);
  font-size: 35px;
font-family:Courier New;
  font-weight: bold;
  text-align: center;
}
.wrapper .search{
  position: relative;
  margin: 35px 0 18px;
}
.search input{
  height: 53px;
  width: 100%;
  outline: none;
  font-size: 20px;
  border-radius: 5px;
  padding: 0 42px;
  border: 1px solid rgb(203,145,72);
}
.search input:focus{
  padding: 0 41px;
  border: 2px solid lightblue;
}
.search input::placeholder{
font-family:Comic Sans MS;
  color: rgb(229,182,112);
}
.search input[type="text"]
{
color:rgb(229,182,112);
font-family:Comic Sans MS;
background:black;
}
.search :where(i, span){
  position: absolute;
  top: 50%;
  color: grey;                   	;
  transform: translateY(-50%);
}
.search i{
  left: 18px;
  pointer-events: none;
  font-size: 16px;
}
.search input:focus ~ i{
  color: darkgrey;
}
.search span{
  right: 15px;
  cursor: pointer;
  font-size: 18px;
  display: none;
}
.search input:valid ~ span{
  display: block;
}
.wrapper .info-text{
  font-size: 13px;
  color: skyblue;
font-family:Courier;
  margin: -3px 0 -10px;
}
.wrapper.active .info-text{
  display: none;
}
.info-text span{
  font-weight: 500;
}
.wrapper ul{
  height: 0;
  opacity: 0;
  padding-right: 1px;
  overflow-y: hidden;
  transition: all 0.2s ease;
}
.wrapper.active ul{
  opacity: 1;
  height: 303px;
}
.wrapper ul li{
  display: flex;
  list-style: none;
  margin-bottom: 14px;
  align-items: center;
  padding-bottom: 17px;
  border-bottom: 1px solid rgb(180,0,20);
  justify-content: space-between;
}
ul li:last-child{
  margin-bottom: 0;
  border-bottom: 0;
  padding-bottom: 0;
}
ul .word p{
  font-size: 22px;
  font-weight: 500;
}
ul .word span{
font-family:Courier;
  font-size: 20px;
  color: rgb(229,182,112);
}
ul .word i{
  color: beige;
  font-size: 20px;
  cursor: pointer;
}
ul .content{
  max-height: 215px;
  overflow-y: auto;
}
ul .content::-webkit-scrollbar{
  width: 0px;
}
.content li .details{
  padding-left: 10px;
  border-radius: 4px 0 0 4px;
  border-left: 3px solid rgb(229,182,112);
}
.content li p{
  font-size: 17px;
  font-weight: 500;
}
.content li span{
  font-size: 15px;
  color: beige;
}
.content .synonyms .list{
  display: flex;
  flex-wrap: wrap;
}
.content .synonyms span{
  cursor: pointer;
  margin-right: 5px;
  text-decoration: underline;
}
.logout h1
{
text-transform:uppercase;
  position: relative;
  top: -60px;
  left: 25px;
color:purple;
font-family:Courier;
font-size:60px;

overflow: hidden;
      
      white-space: nowrap;
      animation: 
      animated-text 
1.5s steps(20, end) forwards;


}

@keyframes typing 
{
      from { width: 0 }
      to { width: 100% }
    }

@keyframes example
{
0%
{color:red;}
25%
{color:yellow;}
50%
{color:blue;}
100%{color:green;}
}

@keyframes blink-caret
{
from, to{border-color:transparent}
50%{border-color:orange}
}

@keyframes animated-text
{
from{width:0;}
to{width:100%;}
}
.logout a
{
  position: absolute;
  top: 50px;
  right: 50px;
  font-size: 30px;
outline:yellow;
border:groove;
background:rgb(229,182,112);
font-family:Forte;
color:black;
border-radius:20px;
}
.logout a:hover
{
color:grey;
background:rgb(229,182,112);
}
.logout span
{
font-family:Courier;

}



  </style>

  </head>
  <body>

<div class="logout">

<h1>WELCOME <?php echo $_SESSION['username'];?>!</h1>
    <br><br><div class="wrapper">
      <header>English Dictionary</header>
      <div class="search">
        <input type="text" placeholder="Search a word" required spellcheck="false">
        <i class="fas fa-search"></i>
        <span class="material-icons">close</span>
      </div>
      <p class="info-text">Type any existing word and press enter to get meaning, example, synonyms, etc.</p>
      <ul>
        <li class="word">
          <div class="details">
            <p>__</p>
            <span>_ _</span>
          </div>
          <i class="fas fa-volume-up"></i>
        </li>
        <div class="content">
          <li class="meaning">
            <div class="details">
              <p>Meaning</p>
              <span>___</span>
            </div>
          </li>
          <li class="example">
            <div class="details">
              <p>Example</p>
              <span>___</span>
            </div>
          </li>
          <li class="synonyms">
            <div class="details">
              <p>Synonyms</p>
              <div class="list"></div>
            </div>
          </li>

        </div>
      </ul>


    </div>

<a href="logout.php">Logout</a>

    <script src="script.js"></script>
</div>
  </body>
</html>
