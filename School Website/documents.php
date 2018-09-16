<header> 
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./css/style2.css">
<title>documents en ligne:</title>

</header>
<div id="wrapper">
      <header class="bg">
         <img src="../images/logo.PNG" alt="logo" class="photo" id="logo">
         <h1>Ecole Nationale des Sciences Appliquées <input class="conn" type="button" value="Se connecter"><input id="inscription"  type="button" value="S'inscrire"></h1>
         <h2>Filière Informatique </h2>
   
		<nav id="navi">
			<ul id="menu">
				<li ><a href="site.html" id="home" ><img src="../images/home.png" alt = "accueil" id="image"></a></li>

				<li><a href="site.html">Présentation</a>
					
					<ul class="sub1">
						<li><a href="presentation.php">Ensa Tétouan</a></li>
						<li><a href="gi.php">Filière Genie info</a></li>
						<li><a href="video.html">Mot du chef de filière</a></li>
						<li><a href="charte.html">Charte de l'étudiant</a></li>
					</ul>

				</li>

				<li><a href="#">Espace étudiant</a>

               <ul class="sub1">
                  <li><a href="#">Mon compte étudiant</a></li>
                  <li><a href="documents.php">Documents</a>

                     <ul class="sub2">
                        <li><a href="s1s2.php">GI1</a></li>
                        <li><a href="s3s4.php">GI2</a></li>
                        <li><a href="s5.php">GI3</a></li>
                     </ul>

                  </li>
                  <li><a href="notes.php">Notes</a></li>
               </ul>

            </li>

            <li><a href="#">Espace professeur</a>
               <ul class="sub1">
                  <li><a href="#">Mon compte professeur</a></li>
                  <li><a href="documents.php">Documents</a></li>
                  <li><a href="modification_note.php">Notes</a></li>
               </ul>



				</li>
				<li><a href="contact.html">Contact</a></li>

			</ul>

		</nav>  
   </div>
<div class="body2">
<div><h3> Cours en ligne:</h3></div><br>
<div class="imagecours">
<img src="../images/atelier-e-learning.jpg" /></div>
<section>
	<nav>
		<div class="">
      			 <ul>
                 
		           <li class="">
                   <div id="GI1" style="display: block;">
<span onClick="document.getElementById('s1s2').style.display = 'block'; document.getElementById('GI1').style.display = 'none';">
<a href="#"> GI1</a>
</span>
</div>
<div id="s1s2" style="display: none;">
<span onClick="document.getElementById('GI1').style.display = 'block';document.getElementById('s1s2').style.display = 'none';">
<a href="#"> GI1</a>
</span>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="s1.php">-Semestre d’Automne(s1)</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="s2.php">-Semestre de Printemps(s2)</a></div>
				     </li>

			       <li class="">
				         <div id="GI2" style="display: block;">
<span onClick="document.getElementById('s3s4').style.display = 'block';
document.getElementById('GI2').style.display = 'none';">
<br> <br> <br>
<a href="#"> GI2</a>
</span>
</div>
<div id="s3s4" style="display: none;">
<span onClick="document.getElementById('GI2').style.display = 'block';document.getElementById('s3s4').style.display = 'none';">
<a href="#">GI2</a>
</span>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="s3.php">-Semestre d’Automne(s3)</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="s4.php">-Semestre de Printemps(s4)</a></div>
				     </li>
				     <li class="">
				         <div id="GI3" style="display: block;">
<span onClick="document.getElementById('s5').style.display = 'block';
document.getElementById('GI3').style.display = 'none';">
<a href="#"> GI3</a>
</span>
</div>
<div id="s5" style="display: none;">
<span onClick="document.getElementById('GI3').style.display = 'block';document.getElementById('s5').style.display = 'none';">
<a href="#"> GI3</a>
</span>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="s5.php">-Semestre d’Automne(s5)</a>
<br>
				     </li>
				</ul>
		</div>
		</nav>
        </section>
    </div>
       
</body>
<footer >

         
         <div  id="dropdown"><ul><li>Ecole Nationale des Sciences Appliquées de Tetouan BP :2222 M'hannech</li> 
            <li>Tel:0539452442</li>
         <li>FAX:0539452475</li></ul>
          </div>
         
   </footer>
</html>
