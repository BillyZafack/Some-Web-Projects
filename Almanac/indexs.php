<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/styles.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/menu.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/header.css" type="text/css" media="all">
    
        <style type='text/css'>/* hardware accelatator class */  
  .trans3d
  {
    -webkit-transform-style: preserve-3d;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform-style: preserve-3d;
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform-style:preserve-3d;
    -ms-transform: translate3d(0, 0, 0);
    transform-style:preserve-3d;
    transform: translate3d(0, 0, 0);
    /*-webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility:hidden;
    backface-visibility:hidden;*/
  }
  #contentContainer
  {
    position:absolute;
    margin-left:-500px;
    margin-top:-500px;
    left:50%;
    top:50%;
    width:1000px;
    height:1000px;
  }
  #carouselContainer
  {
    position:absolute;
    margin-left:-500px;
    margin-top:-500px;
    left:50%;
    top:50%;
    width:1000px;
    height:1000px;
  }  
  .carouselItem
  {
    width:320px;
    height:130px;
    position:absolute;
    left:50%;
    top:50%;
    margin-left:-160px;
    margin-top:-90px;
    visibility:hidden;
  }
  .carouselItemInner
  {
    width:320px;
    height:130px;
    position:absolute;
    background-color:rgba(255, 255, 255, .75);
    border:10px solid rgba(255, 255, 255, .5);
    color:aqua;
    font-size:72px;
    left:50%;
    top:50%;
    margin-left:-160px;
    margin-top:-90px;
    text-align:center;
    padding-top:50px;
  }</style>
        
    </head>
    <body>
        
        
        <header class="header">
            <div class="shell">
		                  
            <div id="top">
    					<div class="top-nav">
    						<ul>
    							<li><a href="#" target="_blank" title="Consulter vos Emails">Webmail</a></li>
                                <li><a href="#">Admission</a></li>
    							<li><a href="#">Bibliothèque</a></li>
    							<li><a href="#">Documents</a></li>
    							<li><a href="#">évènement</a></li>
    							<li><a href="#">Connexion</a></li>
    							<li><a href="#">Contact</a></li>
                                <li><a href="#"><div id="languesFR" rel="fr-FR" class="choixLangue" title="Français">Français</div></a></li>
                                <li><a href="#"><div id="languesEN" rel="en-EN" class="choixLangue" title="English">English</div></a></li>
    						</ul>
    					</div>
    					<div class="cl">&nbsp;</div>
                </div>
				<div class="header-top">
					<h1 id="logo"><a href="#">École Nationale Supérieure Polytechnique</a></h1>
                    
                    <div id="search">
                        <form action="components/controller/controller.search.php" method="POST" enctype="multipart/form-data" class="formSearch" id="formSearch">        <div id="searchtext">              <input type="text" name="serch" placeholder="Recherche..." id="textSearch">        </div></form>                    </div>
					<div class="cl">&nbsp;</div>
				</div>
		
			              <div class="slider">
					<div id="bg"></div>
					
				</div>
		</div></header>
        
           
  <div id="contentContainer" class="trans3d"> 
  <section id="carouselContainer" class="trans3d">
    <figure id="item1" class="carouselItem trans3d"><div class="carouselItemInner trans3d">1</div></figure>
    <figure id="item2" class="carouselItem trans3d"><div class="carouselItemInner trans3d">2</div></figure>
    <figure id="item3" class="carouselItem trans3d"><div class="carouselItemInner trans3d">3</div></figure>
    <figure id="item4" class="carouselItem trans3d"><div class="carouselItemInner trans3d">4</div></figure>
    <figure id="item5" class="carouselItem trans3d"><div class="carouselItemInner trans3d">5</div></figure>
    <figure id="item6" class="carouselItem trans3d"><div class="carouselItemInner trans3d">6</div></figure>
    <figure id="item7" class="carouselItem trans3d"><div class="carouselItemInner trans3d">7</div></figure>
    <figure id="item8" class="carouselItem trans3d"><div class="carouselItemInner trans3d">8</div></figure>
    <figure id="item9" class="carouselItem trans3d"><div class="carouselItemInner trans3d">9</div></figure>
    <figure id="item10" class="carouselItem trans3d"><div class="carouselItemInner trans3d">10</div></figure>
    <figure id="item11" class="carouselItem trans3d"><div class="carouselItemInner trans3d">11</div></figure>
    <script src='js/jquery-ui-1.10.4/jquery-1.10.2.js'>
</script>
 <script type="text/javascript">
   
// set and cache variables
    var w, container, carousel, item, radius, itemLength, rY, ticker, fps; 
    var mouseX = 0;
    var mouseY = 0;
    var mouseZ = 0;
    var addX = 0;   
  // fps counter created by: https://gist.github.com/sharkbrainguy/1156092,
    // no need to create my own :)
    var fps_counter = {      
      tick: function () 
      {
        // this has to clone the array every tick so that
        // separate instances won't share state 
        this.times = this.times.concat(+new Date());
        var seconds, times = this.times;
        if (times.length > this.span + 1) 
        {
          times.shift(); // ditch the oldest time
          seconds = (times[times.length - 1] - times[0]) / 1000;
          return Math.round(this.span / seconds);
        }
        else return null;
      },
      times: [],
      span: 20
    };
    var counter = Object.create(fps_counter);
    </script>
    
    </body>
</html>
