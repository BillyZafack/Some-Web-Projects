<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>TROMBINOSCOPE</title>
        <style type="text/css" >
            div#carousel { 
  perspective: 1200px; 
  background: #100000; 
  padding-top: 10%; 
  font-size:0; 
  margin-bottom: 3rem; 
  overflow: hidden; 
    }
figure#spinner { 
  transform-style: preserve-3d; 
  height: 300px; 
  transform-origin: 50% 50% -500px; 
  transition: 1s;
} 
figure#spinner img { 
  width: 40%; max-width: 425px; 
  position: absolute; left: 30%;
  transform-origin: 50% 50% -500px;
  outline:1px solid transparent; 
}
figure#spinner img:nth-child(1) { transform:rotateY(0deg); 
}
figure#spinner img:nth-child(2) { transform: rotateY(-45deg); }
figure#spinner img:nth-child(3) { transform: rotateY(-90deg); }
figure#spinner img:nth-child(4) { transform: rotateY(-135deg); }
figure#spinner img:nth-child(5){ transform: rotateY(-180deg); }
figure#spinner img:nth-child(6){ transform: rotateY(-225deg); }
figure#spinner img:nth-child(7){ transform: rotateY(-270deg); }
figure#spinner img:nth-child(8){ transform: rotateY(-315deg); }
div#carousel ~ span { 
  color: #fff; 
  margin: 5%; 
  display: inline-block; 
  text-decoration: none; 
  font-size: 2rem; 
  transition: 0.6s color; 
  position: relative; 
  margin-top: -6rem; 
  border-bottom: none; 
  line-height: 0; }
div#carousel ~ span:hover { color: #888; cursor: pointer; height: 563px;}
        </style>
    </head>
    <body>
        <div id=carousel>
            <figure id=spinner>
                <img src='ressources/images/2016/informatique/DJOUBISSIE_OLAMA.jpg' alt="">
                <img src='ressources/images/2016/informatique/DJOUONTSE.JPG' alt="">               
                <img src='ressources/images/2016/informatique/FEUYAN_AUDRIC.jpg' alt="">
                <img src='ressources/images/2016/informatique/FODOUP_KAMDEM_CHRISTIAN.jpg' alt="">
                <img src='ressources/images/2016/informatique/FOMEKONG_TEKATSOP_EVARIS.jpg' alt="">
                <img src='ressources/images/2016/informatique/FokamPokaArsène.jpg' alt="">
                <img src='ressources/images/2016/informatique/Moutombi_Yves_Alex.jpg' alt="">
                <img src='ressources/images/2016/informatique/NANDA EDWARD.JPG' alt="">
</figure>
</div>
<span style=float:left class=ss-icon onclick="galleryspin('-')">&lt;</span>
<span style=float:right class=ss-icon onclick="galleryspin('')">&gt;</span>
<script type="text/javascript">
    var angle = 0;
function galleryspin(sign) { 
spinner = document.querySelector("#spinner");
if (!sign) { angle = angle + 45; } else { angle = angle - 45; }
spinner.setAttribute("style","-webkit-transform: rotateY("+ angle +"deg); -moz-transform: rotateY("+ angle +"deg); transform: rotateY("+ angle +"deg);");
}
    </script>
    div class="pied_de_page">

<strong id="copyright">Billy R. Zafack ## Copyright Novembre 2014</strong>
</div>
    </body>
</html>
