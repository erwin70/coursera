<?php include ('inc/db.php'); ?>
<!DOCTYPE html>
 <html lang="nl">
 <head>
 <title>Film totaal</title>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />  <!-- zo zorg je ervoor dat de pagina zich altijd aanpast aan de breedte van de browser -->
 <meta name="copyright" content="Erwin Leemans - 2020" /> 
 <meta name="description" content=" " /><!-- De titel van je pagina, deze wordt ook bovenaan in de webbrowser weergegeven -->
 <meta name="keywords" content="" /><!-- zo geef je aan met welke zoekwoorden jouw site mag gevonden worden -->
 <meta name="DISTRIBUTION" content="global" />
 
 <meta name="ROBOTS" content="INDEX, FOLLOW" />
 <meta name="REVISIT-AFTER" content="7 DAYS" /> 
 <meta name="author" content="Erwin Leemans"> <!-- Auteur van de site -->
 
 <link href="style.css" rel="stylesheet" type="text/css" />
 <link href="css/print.css" rel="stylesheet" type="text/css" media="print" /> 
 <script src="https://apis.google.com/js/platform.js"></script> 
  
 </head> 
 <body> 
 <nav> 
 
 <ul id="menuPc"> 
 <li class="headlink"><a href= "www.youtube.com"title="home">Home</a></li> 
 <li class="headlink">|</li>
 <li class="headlink"><a href="www.youtube.com" title="Film's">Films <span class="icon-white">&nbsp;</span></a>
 <ul><div id="submenu">
 <li><a href="" title="">Horror</a></li>
 <li><a href="" title="">Actie</a></li>
 </div></ul>
 </li> 
 <li class="headlink">|</li>
 <li class="headlink"><a href="www.youtube.com" title="Contact">Contact</a></li>
 </ul>
 <ul id="menuMob">
 <li class="headlink"><a title="home">Menu <span clasa="icon-white">&nbsp;</span></a>
 <ul><div id=" supmenu">
<li> <a href = "www.youtube.com" title = "home"> Startpagina </a> </li> 
<li> <a href="www.youtube.com" title="Film's"> Films </a> </li> 
<li>  <a href="www.youtube.com" title="Contact"> Contact </a> </li>
 </div> </ul>
 </li>
 </ul>

 </nav> 
 <header>&nbsp;</header>
 <div  class="overlay">&nbsp; </div>
 <section id = "content">
 <?php include ('inc/plugin.php'); ?>
 </section> 
 <footer> <p> &copy;  2020 - website Elderschans </p> 
</footer> 