<?php
?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="home.css" >
<title>AVYASHU IT</title>
</head>
<body>
<header>
  <section class="head1">
     <h1>AVYASHU IT</h1>
     <nav class="fr" onmouseover="Home()">HOME</nav>
	 <nav class="fr" onmouseover="HTML()">HTML</nav>
	 <nav class="fr" onmouseover="CSS()">CSS</nav>
	 <nav class="fr" onmouseover="JSP()">JSP</nav>
	 <nav class="fr" onmouseover="PHP()">PHP</nav>
	 <nav class="fr" onmouseover="JAVASCRIPT()">JAVASCRIPT</nav>
  </section>
   <section class="cont">
   <p id="mycont">
    Feel Free to learn anything in Web Development. we are always here to help you.
	</p>
   </section>
</header>

<section class="content1">

  <nav class="gal">
     OUR RECENT GALLERY
   </nav>
   
   <nav class="imagesld">
   <img class="imgStyle" src="./Image/1.jpg" id="mainImage" />
      <br />
   </nav>
   
    <nav id="mydiv" onmouseover="changeImage(event)" onclick="changeImage(event)" class="actual">
      <img class="imgThumb" src="./Image/1.jpg" />
      <img class="imgThumb" src="./Image/2.jpg" />
      <img class="imgThumb" src="./Image/3.jpg" />
      <img class="imgThumb" src="./Image/4.jpg" />
      <img class="imgThumb" src="./Image/5.jpg" />
	  <img class="imgThumb" src="./Image/1.jpg" />
      <img class="imgThumb" src="./Image/2.jpg" />
	  <img class="imgThumb" src="./Image/4.jpg" />
      <img class="imgThumb" src="./Image/3.jpg" />
      <img class="imgThumb" src="./Image/4.jpg" />
      <img class="imgThumb" src="./Image/5.jpg" />
	  <img class="imgThumb" src="./Image/1.jpg" />
      <img class="imgThumb" src="./Image/2.jpg" />
      <img class="imgThumb" src="./Image/3.jpg" />
      <img class="imgThumb" src="./Image/4.jpg" />
      <img class="imgThumb" src="./Image/5.jpg" />
	  <img class="imgThumb" src="./Image/1.jpg" />
      <img class="imgThumb" src="./Image/2.jpg" />
      <img class="imgThumb" src="./Image/3.jpg" />
      <img class="imgThumb" src="./Image/4.jpg" />
      <img class="imgThumb" src="./Image/5.jpg" />
      </nav>

	  <nav class="blank"></nav>
</section>
<footer>
	 <section>
	     <table class="foot1">
	     <tr>
		     <th>About Us</th>
			 <th>News</th>
			 <th>New Tech</th>
			 <th>Blog</th>
			 <th>Portfolio</th>
			 <th>History</th>
		 </tr>
		 </table>
		 <table class="foot2">
	     <tr class="ins">
		     <td>HTML</td>
			 <td>CSS</td>
			 <td>JAVASCRIPT</td>
			 <td>PHP</td>
			 <td>JSP</td>
			 <td>WEB</td>
		 </tr>
		 <tr>
		     <td>HTML5</td>
			 <td>CSS3</td>
			 <td>SYNTAX</td>
			 <td>METHODS</td>
			 <td>HOW TO START</td>
			 <td>BEGINER</td>
		 </tr>
		 <tr>
		     <td>TAGS</td>
			 <td>BASIC</td>
			 <td>FUNCTION</td>
			 <td>HOW ? SERVER</td>
			 <td>BASIC</td>
			 <td>NEW TO LEARN</td>
		 </tr>
		 <tr>
		     <td>FORM</td>
			 <td>MUST LEARN</td>
			 <td>EXPRESSION</td>
			 <td>DEMO</td>
			 <td>LIVE</td>
			 <td>HOST</td>
		 </tr>
		 <tr>
		     <td>INPUT</td>
			 <td>TYPE</td>
			 <td>EMBEDING</td>
			 <td>MIXING</td>
			 <td>TEST</td>
			 <td>HOST</td>
		 </tr>
	   </table>
	 </section>
	 
<hr>
  <section class="copy">
    &copy; Avyashu IT Solutions Private Limited
	<nav>
	  <input type="search" placeholder="Query" class="qry" />
	  <input type="button" value="SEND" class="search" />
	</nav>
  </section>
</footer>
<script>
          
          var image = document.getElementById("mydiv").getElementsByTagName("img");
          
          for(var i=0; i < image.length;i++)
          {
              image[i].onmouseover = function (){
                  this.style.cursor = 'hand';
                  this.style.borderColor = '#FF007F';
              }
              
              image[i].onmouseout = function (){
                  this.style.cursor = 'pointer';
                  this.style.borderColor = 'black';
              }
          }
          
          function changeImage(event)
          {
              event = event || window.event;
              
              var targetElement = event.target || event.srcElement;
              
         
                if(targetElement.tagName == "IMG")
                {
                  document.getElementById("mainImage").src = targetElement.getAttribute("src");
                }
              
          }
		  
		  var sav1 = document.getElementById("mycont");
		  
		  function Home(){
		  var cont1 = "Feel Free to learn anything in Web Development. we are always here to help you";
		  sav1.innerHTML = cont1;
		  }
		  function HTML(){
		  var cont2 = "<b>HyperText Markup Language</b>, commonly referred to as <b>HTML</b>, is the standard markup language used to create web pages";
		  sav1.innerHTML = cont2;
		  }
		  function CSS(){
		  var cont3 = "<b>Cascading Style Sheets (CSS)</b> is a style sheet language used for describing the presentation of a document written in a markup language";
		  sav1.innerHTML = cont3;
		  }
		  function JSP(){
		  var cont4 = "<b>JavaServer Pages (JSP)</b> is a technology that helps software developers create dynamically generated web pages based on HTML, XML, or other document types.";
		  sav1.innerHTML = cont4;
		  }
		  function PHP(){
		  var cont5 = "<b>PHP</b> is a server-side scripting language designed for web development but also used as a general-purpose programming language.";
		  sav1.innerHTML = cont5;
		  }
		  function JAVASCRIPT(){
		  var cont6 = "<b>JavaScript</b> is a high-level, dynamic,untyped, and interpreted programming language.It has been standardized in the ECMAScript language specification";
		  sav1.innerHTML = cont6;
		  }
		  
          </script>
</body>
</head>
</html>