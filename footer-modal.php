<!-- Call to Action -->
<section class="cta" >
      <div class="container" >
        <div class="row" >
          <div class="col-lg-9 col-sm-12 text-lg-left ">
            <h2 style="font-family: Andalus; color:#199EB8; ">
              <b>Anoucement: </b>
            </h2>
            <!-- 1 row -->
            <p>
           <span><b style="font-family: verdana; color:#199EB8;">Date : &nbsp;</b>
            October 23-28, 2017
            </span><br>
            <span><b  style="font-family: verdana; color:#199EB8;">What : &nbsp;</b>
            Final Examination
            </span>
            </p>
            <!-- 2 row -->
              <br>
            <p>
            <span><b style="font-family: verdana; color:#199EB8; ">Date : &nbsp;</b>
            October 29, 2017
            </span><br>
            <span><b style="font-family: verdana; color:#199EB8; ">What : &nbsp;</b>
            Starting of Enrollment for 2nd Semester..
            </span>
            </p>
            <!-- 3 row -->
            <br>
            <p>
            <span><b style="font-family: verdana; color:#199EB8;font-size: verdanapx ">Date : &nbsp;</b>
            October 30, 2017
            </span><br>
            <span><b style="font-family: verdana; color:#199EB8; font-size: verdanapx ">What : &nbsp;</b>
            Institutional Examination for all first year ICT-A and ICT-C ..
            </span>
            </p>
          </div>
          <div class="col-lg-3 col-sm-12 text-lg-right text-center">
            <a class="btn btn-ghost" href="#id01" onclick="document.getElementById('id01').style.display='block'" >Read More</a>
          </div>
        </div>
      </div>
    </section>
<!-- Modal -->
  <div id="id01" class="w3-modal" >
 <div  class="w3-modal-content w3-card-4 w3-animate-zoom">
  <header class="w3-container " style="background-color: #199EB8; color: white; font-family:Andalus; ">
   <span  onclick="document.getElementById('id01').style.display='none'"
   class="w3-closebtn w3-padding-top">x</span>
   <h2>Anoucement</h2>
  </header>
  <ul class="w3-pagination w3-white w3-border-bottom" style="width:100%;cursor: pointer;">
   <li><a class="tablink" onclick="openCity(event, 'London')">No Class</a></li>
   <li><a class="tablink" onclick="openCity(event, 'Paris')">Mid-Term and Final</a></li>
   <li><a class="tablink" onclick="openCity(event, 'Tokyo')">Other Info</a></li>
  </ul>
  <div id="London" class="w3-container city">
   <h1>No Class</h1>
   <h5 style="color:#199EB8">Coming Soon</h5>
   <p>Coming Soon .</p>
  </div>
  <div id="Paris" class="w3-container city">
   <h1>Mid-Term</h1>
   <h5 style="color:#199EB8">August 20, 2017</h5>
   <p>Do your best students .</p>
   <h1>Final</h1>
   <h5 style="color:#199EB8">October 23-28, 2017</h5>
   <p>Do your best students .</p>
  </div>
  <div id="Tokyo" class="w3-container city">
   <h1>Enrollment</h1>
   <h5 style="color:#199EB8"></h5>
   <h5>Enrollment for 2nd semester Starts on October 29, 2017 .</h5>
   <h1>Insti</h1>
   <h5 style="color:#199EB8">October 30, 2017</h5>
   <p>Do your best students .</p>
  </div>
  <div class="w3-container w3-light-grey w3-padding">
   <button class="w3-btn w3-right w3-white w3-border"
   onclick="document.getElementById('id01').style.display='none'">Close</button>
  </div>
 </div>
</div>
<script>
document.getElementsByClassName("tablink")[0].click();
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
</script>
<!-- /Call to Action -->
