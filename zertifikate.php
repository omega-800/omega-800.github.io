<!DOCTYPE html>
<html lang="de" id="hhttmmll">
	<head>
    <?php include ('php/head.php');
    include ('php/checksession.php');?> 
	</head>
	 
	<body>
		<div class= "wrapper" id="main">
			<header>
				<?php include ('php/navbar.php');?>
			</header>
		
			<main>
        <h1 id="titel">Zertifikate</h1>
        
        <div class = "navthing-container1">
          <div class = "navthing1" onclick="smoothScroll(document.getElementById('h2Zeugnisse'))"><p>Zeugnisse</p></div>
          <div class = "navthing1" onclick="smoothScroll(document.getElementById('h2Sprachen'))"><p>Sprachen</p></div>
          <div class = "navthing1" onclick="smoothScroll(document.getElementById('h2Diplome'))"><p>Diplome</p></div>
        </div>
        <?php 
          include ('php/topButton.php');
          include ('php/gallery.php');
          createSlideshow("content/zeugnisse", "Zeugnisse", 1);
          createSlideshow("content/sprachen", "Sprachen", 2);
          createSlideshow("content/diplome", "Diplome", 3);
        ?>
      </main>
      
      <footer>
        <?php include ('php/footer.php');?>
      </footer>
      <script>
        var thmb11=document.getElementById("zertpic11");
        var thmb12=document.getElementById("zertpic12");
        var thmb13=document.getElementById("zertpic13");
        var thmb14=document.getElementById("zertpic14");

        var thmb21=document.getElementById("zertpic21");
        var thmb22=document.getElementById("zertpic22");

        var thmb31=document.getElementById("zertpic31");
        var thmb32=document.getElementById("zertpic32");
        var thmb33=document.getElementById("zertpic33");

        var modal1=document.getElementById("myModal1");
        var modal2=document.getElementById("myModal2");
        var modal3=document.getElementById("myModal3");

        var close1=document.getElementById("close1");
        var close2=document.getElementById("close2");
        var close3=document.getElementById("close3");

        thmb11.onclick=function(){
          modal1.style.display = "block";
          document.getElementById("hhttmmll").style.overflow = "hidden";
          currentSlide(1, 0);
        }
        thmb12.onclick=function(){
          modal1.style.display = "block";
          document.getElementById("hhttmmll").style.overflow = "hidden";
          currentSlide(3, 0);
        }
        thmb13.onclick=function(){
          modal1.style.display = "block";
          document.getElementById("hhttmmll").style.overflow = "hidden";
          currentSlide(7, 0);
        }
        thmb14.onclick=function(){
          modal1.style.display = "block";
          document.getElementById("hhttmmll").style.overflow = "hidden";
          currentSlide(9, 0);
        }
        close1.onclick=function(){
          modal1.style.display = "none";
          document.getElementById("hhttmmll").style.overflow = "initial";
        }

        thmb21.onclick=function(){
          modal2.style.display = "block";
          document.getElementById("hhttmmll").style.overflow = "hidden";
          currentSlide(1, 1);
        }
        thmb22.onclick=function(){
          modal2.style.display = "block";
          document.getElementById("hhttmmll").style.overflow = "hidden";
          currentSlide(3, 1);
        }
        close2.onclick=function(){
          modal2.style.display = "none";
          document.getElementById("hhttmmll").style.overflow = "initial";
        }

        thmb31.onclick=function(){
          modal3.style.display = "block";
          document.getElementById("hhttmmll").style.overflow = "hidden";
          currentSlide(1, 2);
        }
        thmb32.onclick=function(){
          modal3.style.display = "block";
          document.getElementById("hhttmmll").style.overflow = "hidden";
          currentSlide(2, 2);
        }
        thmb33.onclick=function(){
          modal3.style.display = "block";
          document.getElementById("hhttmmll").style.overflow = "hidden";
          currentSlide(3, 2);
        }
        close3.onclick=function(){
          modal3.style.display = "none";
          document.getElementById("hhttmmll").style.overflow = "initial";
        }

        window.onclick = function(event) {
          if (event.target == modal1) {
            modal1.style.display = "none";
          document.getElementById("hhttmmll").style.overflow = "initial";
          }else if (event.target == modal2) {
            modal2.style.display = "none";
          document.getElementById("hhttmmll").style.overflow = "initial";
          }else if (event.target == modal3) {
            modal3.style.display = "none";
          document.getElementById("hhttmmll").style.overflow = "initial";
          }
        }


        var slideIndex = [1,1,1];
        /* Class the members of each slideshow group with different CSS classes */
        var slideId = ["whatamidoing1", "whatamidoing2", "whatamidoing3"]
        showSlides(1, 0);
        showSlides(1, 1);
        showSlides(1, 2);

        function dotPressed(n, no, id){
          var y = document.getElementsByClassName("dot");
          var i;
          for (i = 0; i < y.length; i++) {
            y[i].style.backgroundColor = "#003366";
          } 
          document.getElementById(id).style.backgroundColor = "black";
          currentSlide(n, no);
        }

        function currentSlide(n, no) {
          showSlides(slideIndex[no] = n, no);
        }

        function plusSlides(n, no) {
          showSlides(slideIndex[no] += n, no);
        }

        function showSlides(n, no) {
          var i;
          var x = document.getElementsByClassName(slideId[no]);
          var dots = document.getElementsByClassName("dot");
          if (n > x.length) {slideIndex[no] = 1}
          if (n < 1) {slideIndex[no] = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          x[slideIndex[no]-1].style.display = "block";
        } 
      </script>
		</div>
	</body>
</html>
