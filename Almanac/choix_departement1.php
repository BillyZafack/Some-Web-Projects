<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Pure CSS Polaroid Photo Gallery</title>

<style type="text/css">

* { margin: 0; padding: 0; border: 0; }

body {
	background: #959796 url(ressources/images/design/wood-repeat.jpg);
}

#container {
	width: 600px; margin: 40px auto;
}

h1 {
	font: bold 65px/60px Helvetica, Arial, Sans-serif;
	text-align: center; color: #eee;
	text-shadow: 0px 2px 6px #333;
}

h2 a {
	display: block; text-decoration: none; margin: 0 0 30px 0;
	font: italic 45px Georgia, Times, Serif; 
	text-align: center; color: #bfe1f1;
	text-shadow: 0px 2px 6px #333;
}
	h2 a:hover {
		color: #90bcd0;
	}

ul.gallery { 
	list-style: none;
}
ul.gallery li a {
	position: relative;
	float: left;
	padding: 10px 10px 25px 10px;
	background: #eee;
	border: 1px solid #fff;
	-moz-box-shadow: 0px 2px 15px #333;
        margin-right: 1%;
}
	
	ul.gallery li a.pic-1 {
		z-index: 1;
		-webkit-transform: rotate(-10deg);
 		-moz-transform: rotate(-10deg);
	}
	ul.gallery li a.pic-2 {
		z-index: 5;
		-webkit-transform: rotate(-3deg);
 		-moz-transform: rotate(-3deg);
	}
	ul.gallery li a.pic-3 {
		z-index: 3;
		-webkit-transform: rotate(4deg);
 		-moz-transform: rotate(4deg);
                margin-left: 22%;
	}
	ul.gallery li a.pic-4 {
		z-index: 4;
		-webkit-transform: rotate(14deg);
 		-moz-transform: rotate(14deg);
	}
	ul.gallery li a.pic-5 {
		z-index: 2;
		-webkit-transform: rotate(-12deg);
 		-moz-transform: rotate(-12deg);
	}
	ul.gallery li a.pic-6 {
		z-index: 6;
		-webkit-transform: rotate(5deg);
 		-moz-transform: rotate(5deg);
	}
	
	ul.gallery li a:hover {
		z-index: 10;
		-moz-box-shadow: 3px 5px 15px #333;
	}

        h1 {
font: bold 65px/60px Helvetica, Arial, Sans-serif;
color: #eee;
text-shadow: 0px 2px 6px #333;
text-align: center;
font-size: 255%;
margin-bottom: 12%;
font-family: 'Open Sans', arial;
-webkit-font-smoothing: antialiased;
font-weight: 100;
margin-top: 2%;
display: block;
}
header{
    width: 100%;
height: 51px;
background-color: #f8f8f8;
border-color: #e7e7e7;
}

header nav{
    overflow: hidden;
    display: inline-block;
    margin: 20px 0 0 40px;
    padding: 13px 40px;
    float: right;
}

header nav ul{
  list-style: none;
float: right;
}

header nav ul li{
    float: left;
margin-left: 5%;
margin-right: -1%;
margin-bottom: 2%;
font-size: 12px;
font-family: 'lato_regular', arial;
}

header nav ul li:first-child{
  margin-left: -13%;
z-index: 999;
}

header nav ul li a {
    text-decoration: none;
    color: black;
}
</style>

</head>

<body>
    <header >
		<div class="wrapper">
			<nav id="nav_menu" style='padding-top: 1px;'>
				<ul>
                    <li><a href="index.php">Page D'Accueil</a></li>
                                        <li><a href="choix_promo.php">Decouvrir les PIPOS</a></li>
					<li><a href="www.polytechnique.cm">Site Officiel ENSP</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>

		</div>
	</header><!--  End Header  -->
<div class="header content clearfix">
    <img alt="Header" class="header2" src="ressources/images/design/header.png" style="
    margin-left: 24%;  
    margin-top: 4%;
    border-radius: 132px;
">
  </div>
<div id="container">
	<h1 style="
    margin-top: 15%;
">Choix De Departement</h1>
	<?php session_start();
                $_SESSION['departement']="";
                if(isset($_GET['promotion']))
                {
                    $_SESSION['promotion']=$_GET['promotion'];
                }
        
        ?>
	<ul class="gallery">
            <li><a href="main.php?departement=Informatique" class="pic-1"><img src="ressources/images/design/informatique.jpg" alt="Genie Informatique"></a></li>
            <li><a href="main.php?departement=Genie_Civile_Et_Urbanisme" class="pic-2"><img src="ressources/images/design/civile.jpg" alt="Genie Civile "></a></li>
            <li><a href="main.php?departement=Genie_Electrique_et_Telecommunications" class="pic-3"><img src="ressources/images/design/electrique.jpg" alt="Genie Electrique et Telecommunication"></a></li>
            <li><a href="main.php?departement=Genie_Mecanique_et_Industrielle" class="pic-4"><img src="ressources/images/design/mecanique.jpg" alt="Genie Mecanique et Industrielle"></a></li>
            <li><a href="main.php?departement=Mathematiques_et_Sciences_Physiques" class="pic-5"><img src="ressources/images/design/msp.jpg" alt="MSP"></a></li>
	</ul>

</div>

<div class="pied_de_page" style="padding: 5px;
clear: both;
text-align: center;
margin-top: 40%;
color: white;
background-repeat: repeat-x;
border: 2px solid white;
margin-bottom: 5px;">

<strong id="copyright">Billy R. Zafack ## Copyright &COPY; Novembre 2014</strong>
</div>

</body></html>
