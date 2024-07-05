 <?php include"header.php"; ?>
<body>
    <!-- About -->
    <section class="about" id="about">
      <div class="container text-center">

        <h3 class="them" style="border:0px solid #199EB8;margin-top:-50px; box-shadow: 0px 8px 8px 0px #199EB8; font-family: Andalus; font-size:22px; max-width: 480px; min-width: 100px; margin-left: auto; margin-right: auto;"> " Changing the world view of the next Generation " </h3>
        <br>

        <!-- Insert to your webpage before the </head> -->
        <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:100%;margin:0 auto;">

          <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">

              <ul class="amazingslider-slides" style="display:none;">
                  <li><img src="img/models/video1.jpg" alt="1"  title="Video Editing" />
                  </li>
                  <li><img src="img/models/design.jpg" alt="2"  title="Graphic Designing" />
                  </li>
                  <li><img src="img/models/program1.jpg" alt="3"  title="Web Designing" />
                  </li>
                  <li><img src="img/models/auto.jpg" alt="4"  title="Computer Aided Design 3D & 2D" />
                  </li>
                  <li><img src="img/models/program2.jpg" alt="5"  title="PHP and MySQL" />
                  <li><img src="img/models/chs.jpg" alt="5"  title="Computer Hardware Servicing & Installation" />
                  </li>
              </ul>
              <ul class="amazingslider-thumbnails" style="display:none;">
                  <li><img src="img/models/video1.jpg" alt="1" title="Video Editing" /></li>
                  <li><img src="img/models/design.jpg" alt="2" title="Graphic Designing" /></li>
                  <li><img src="img/models/program1.jpg" alt="3" title="Web Designing" /></li>
                  <li><img src="img/models/auto.jpg" alt="4" title="autocad" /></li>
                  <li><img src="img/models/program2.jpg" alt="5" title="php and sql" /></li>
                  <li><img src="img/models/chs.jpg" alt="5" title="chs" /></li>
              </ul>
          </div>
        </div>
        <!-- End of body section HTML codes -->
        <br>
        <br>
        <br>

          <p style="border:0px solid #199EB8; box-shadow: 0px 0px 8px 0px #199EB8; font-family:sans-serif; font-size: 105%; max-width: 900px; margin-left: auto; margin-right: auto ">
          <span style="font-size: 135%; color: #199EB8; font-family:raleway; ">Mission</span><br>
          Inno-Tech produces highly-skilled, well-disciplined and globally competetive individuals who
            exhibit integrity, creating a strong impact to their family and community and enjoying financial
            freedom.
        </p>



          <p id="vis" style="border:0px solid #199EB8; box-shadow: 0px 0px 8px 0px #199EB8; font-family:sans-serif; font-size: 105%; max-width: 900px; margin-left: auto; margin-right: auto ">
          <span style="font-size: 135%; color: #199EB8; font-family:raleway; ">Vission</span><br>
          Inno-Tech is a distinctive Technological School that offers TESDA Programs using relevant curricula
            and effective teaching methodology with fully-equipped facilities that help the students find a suitable on the - job training (OJT) and a decent job resulting to holistic transformation.
        </p>
         <br>
        <p style="border:1px solid #199EB8; box-shadow: 0px 8px 8px 0px #199EB8; font-family:sans-serif; font-size: 105% ">
          The primary goal of INNO-TECH is to provide an alternative education for the youth who are not ‘‘academically prepared and financially ready’’ to take up degree courses. Having in mind that these youth should be ‘‘globally competitive’’ even without bachelor’s degree, we came up in bundling a number of TESDA Courses that will make them ‘‘Highly-skilled, Multi-skilled and Innovative’’ individuals and combining it with our unique ‘‘Moral Values & Discipline’’ program with emphasis on ‘‘Spiritual Development’’ altogether result to ‘‘Personhood Enrichment’’ that will help these youth to get gainful employment.
        </p>
        </div>
    </section>
    <!-- /About -->

<section class="portfolio" id="portfolio" style="padding-top: 1px">
        <br><br><br>
      <div class="container text-center" style="border:1px solid #199EB8; box-shadow: 0px 2px 5px 0px #199EB8;width:82%">
        <h5>
          <b>Inno-Tech </b> is offering <span style=" color:#3a54ad"><b> 2yr Information & Communication Technology  &nbsp; (ICT) </b></span>
        </h5>
        <ul id="tblc">
        <li id="cr1" style="text-align:left; color:red"> Major in Programming</li>
        <li style="text-align:left; color:red"> Major in Visual Graphic Design</li>
        </ul>
        <br>
        <p style="color:black; font-family: sans-serif;">with a very affordable Tuition Fee, airconditioned laboratories and classroom, one computer per student, hands-on training  <br> and flexible schedules (MWF, TTHS, Night) available....</p>
      </div>
      <br>
  <div class="w3-row-padding" style="">
  <div class="w3-container"  align="center">
    <img src="img/models/sc2.jpg" style="width:70%  ;cursor: zoom-in;"
    onclick="onClick(this)"
    class="w3-hover-opacity">
  </div>
<div id="m01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-closebtn w3-hover-red w3-container w3-padding-16 w3-display-topright">×</span>
  <img class=" w3-animate-zoom" id="img01" style="width:90%; margin-left: 5%; cursor: zoom-out;">
</div>
       <br><br><br>
      </div>
      <script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("m01").style.display = "block";
}
</script>
</section>
<?php include "footer-modal.php"; ?>
<?php include "footer.php" ?>
