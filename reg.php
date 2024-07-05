<?php include"header.php"; ?>
<body>
    <section id="contact" style="clear: both;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">

            <a href="#id01" onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-green w3-large"><h3 class="section-title" style="color: white"> Reserve Now</h3></a>

            <a href="staff.html" id="ss" class="w3-btn w3-green w3-large"><h3 class="section-title">Staff </h3></a>

            <a href="req.html" id="req" class="w3-btn w3-green w3-large"><h3 class="section-title" style="color: white">Requirements </h3></a>


          </div>
        </div>

      <div id="id01" class="w3-modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-16 w3-display-topright">×</span>
  <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">


    <div class="w3-container">
    <div class="w3-section">

<form action="reserve.php " method="post" class="w3-container" >

<div class="w3-container w3-text-teal">
  <h2>Reservation Form</h2>
</div>

<br>

<div class="w3-row-padding">

  <div class="w3-third">
    <input class="w3-input " type="text" name="first" style="text-transform: capitalize;" required>
    <label class="w3-label  w3-validate">First Name</label>
  </div>

  <div class="w3-third">
    <input class="w3-input " type="text" name="middle" style="text-transform: capitalize;" required>
    <label class="w3-label w3-validate">Middle Name</label>
  </div>

  <div class="w3-third">
    <input class="w3-input " type="text" name="last" style="text-transform: capitalize;" required>
    <label class="w3-label w3-validate">Last Name</label>
  </div>
</div>

<br>

<div class="w3-row-padding">

  <div class="w3-third">
    <select class="w3-input"  name="gender" style=" width:153px;" selected>
      <option value="Male">Male</option>
      <option  value="Female">Female</option>
    </select>
<label class="w3-label  w3-validate">Gender</label>
  </div>

  <div class="w3-third">
    <input class="w3-input " type="number" min-length=2 name="age" required>
    <label class="w3-label w3-validate">Age</label>
  </div>

  <div class="w3-third">
    <input class="w3-input " type="date" name="date" required>
    <label class="w3-label w3-validate">Date</label>
  </div>
</div>


<p>
<input class="w3-input " type="text" name="address1" style="text-transform: capitalize;" required>
<label class="w3-label  w3-validate">Present Address</label>
</p>

<p>
<input class="w3-input " type="text" name="address2" style="text-transform: capitalize;" required>
<label class="w3-label w3-validate">Permanent Address</label></p>

<p>
<input class="w3-input " type="email" name="email" required>
<label class="w3-label w3-validate">Email</label></p>

<p><input class="w3-input  " style="width: 150px" type="number" length="11"  name="phonenum" required>
<label class="w3-label w3-validate">Phone Number</label></p>

<br>

<p><select class="w3-input"  name="course" style=" width: 210px;" selected>
                      <option  value="ICT  ( Information and Communication Technology )">ICT ( Information and Communication Technology )</option>
</select>
<label class="w3-label w3-validate">Course</label></p>

<p><select class="w3-input "  name="semester" style=" width: 210px;" selected>
                      <option id="1st1" value="1st year, 1st semester">1st year, 1st semester</option>
                      <option id="1st2" value="1st year, 2nd semester">1st year, 2nd semester</option>
                      <option id="2nd1" value="2nd year, 1st semester">2nd year, 1st semester</option>
                      <option id="2nd2" value="2nd year, 2nd semester">2nd year, 2nd semester</option>
</select>
<label class="w3-label w3-validate">Semester</label></p>


<p><select class="w3-input  "  name="schedule" style=" width: 210px;" selected>
                      <option id="1st1" value="MWF">MWF</option>
                      <option id="1st2" value="T TH S">T TH S</option>
                      <option id="2nd1" value="NIGHT">Night</option>
</select>
<label class="w3-label w3-validate">Schedule</label></p>

  <br>

<p>
<button class="w3-btn w3-teal" type="submit" name="submit" >Reserve</button></p>

</form>
    </div>





    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
      <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
    </div>

  </div>
</div>


      </div>
    </section>


        <section class="portfolio" id="portfolio" style="padding-top: 1px">

      <div class="container text-center">

          <h2>
          Course Offered
        </h2>

        <div class="container text-center" style="border:1px solid #199EB8; box-shadow: 0px 2px 5px 0px #199EB8;width:82%">

        <h5>
          <b>Inno-Tech </b> is offering <span style=" color:#3a54ad"><b> 2yr Information & Communication Technology</b> </span>
        </h5>

        <ul id="tblc">
        <li id="cr1" style="text-align:left; color:red"> Major in Programming</li>
        <li style="text-align:left; color:red"> Major in Visual Graphic Design</li>
        </ul>

        <br>

        <p style="color:black; font-family: sans-serif;">with a very affordable Tuition Fee, airconditioned laboratories and classroom, one computer per student, hands-on training  <br> and flexible schedules (MWF, TTHS, Night) available....</p>

        </div>

      </div>

      <br>

  <div class="w3-row-padding" style="">

  <div class="w3-container"  align="center">
    <img src="img/models/sc2.jpg" style="width:70%  ;cursor: zoom-in;"
    onclick="onClick(this)"
    class="w3-hover-opacity">
  </div>

      </div>
      </div>
    </section>



    <!-- Portfolio -->

    <section class="portfolio" id="portfolio" style="padding-top: 1px">
     <br><br><br>

      <div class="container text-center">

      <h2>Tuition Fee and Discount</h2>

    <table align="center" style="width: 80%; height:auto; border: 0px solid black">
      <tr>
        <td colspan="2" style="border: 0px solid black;background-color: black; color:white; font-family:andalus;"><h6><b>1st 100 STUDENTS ONLY CAN AVAIL 50% DISCOUNT</b></h6></td>
      </tr>

    </table>

    <br>

    <table align="center" style="width: 80%; height: 100px; border: 0px solid black">

      <tr>
        <td colspan="2" style="border: 1px solid black; color:black; background-color:grey"><b> 50% Discount On Tuition Fee  </b></td>
      </tr>

      <tr>
        <td style="border: 1px solid black; width:70%; color:black; text-align:right">1st SEMESTER without Discount </td>
        <td style="border: 1px solid black; color:black">PHP 9,500.00</td>
      </tr>

      <tr>
        <td style="border: 1px solid black; color:black ; text-align:right">1st SEMESTER with 50% Discount </td>
        <td style="border: 1px solid black; color:black">PHP 7,000.00</td>
      </tr>

    </table>

    <br>

    <table align="center" style="width: 80%; height: 100px; border: 0px solid black">

      <tr>
        <td colspan="2" style="border: 1px solid black; color:black;background-color:grey; "><b> Installment Basis For 50% Discount  </b></td>
      </tr>

      <tr>
        <td style="border: 1px solid black; width:70%; color:black ; text-align:right"> Enrollment Fee </td>
        <td style="border: 1px solid black; color:black">PHP 1,500.00</td>
      </tr>

      <tr>
        <td style="border: 1px solid black; width:70%; color:black ; text-align:right"> Remaining balance for 1st Semester </td>
        <td style="border: 1px solid black; color:black">PHP 5,500.00</td>
      </tr>

      <tr>
        <td style="border: 1px solid black; width:70%; color:black ; text-align:right"> Monthly Payments </td>
        <td style="border: 1px solid black; color:black">PHP 1,375.00 x 4</td>
      </tr>

      <tr>
        <td style="border: 1px solid black; width:70%; color:black ; text-align:right"><b> Total Amount </b></td>
        <td style="border: 1px solid black; color:black">PHP 7,000.00</td>
      </tr>



    </table>

    <br><br>





        <h2>
          Enrollment Procedure
        </h2>

        <h4 style="color:black">
          New Students and Old Students
        </h4>
        <p style="color: black; font-family: verdana">
          1. Enrollment Area at <a id="mapss" style="text-decoration: none;" href="https://www.google.com.ph/maps/place/Innovative+Technological+College+of+the+Philippines/@10.2453931,123.7945835,18z/data=!4m12!1m6!3m5!1s0x33a977e212cf4535:0x54164679e25825b!2sInnovative+Technological+College+of+the+Philippines!8m2!3d10.245372!4d123.795651!3m4!1s0x33a977e212cf4535:0x54164679e25825b!8m2!3d10.245372!4d123.795651?hl=en" target="_blank">2nd floor R. Larrobis blgd. Poblacion Ward IV, Minglanilla, Cebu.</a>  Over Cebu Gadget Cell Shop..
        </p>

        <br>

        <p style="color: black; font-family: verdana"><u> ONLY THOSE APPROVED, PRINTED AND SIGNED STUDY LOAD ARE CONSIDERED OFICIALLY ENROLLED </u></p>

      </div>

      <br><br><br>

    </section>

    <!-- /Portfolio -->

    <section class="portfolio" id="portfolio" style="padding-top: 1px">

      <div class="container text-center">
        <h2>
          Students Schedule
        </h2>

        <p>
          Find your Schudule below ..
        </p>
      </div>

      <br>

  <div class="w3-row-padding" style="">

  <div class="w3-container w3-third"  title="1st year A">
    <img src="img/sched/1.jpg" style="width:100.1% ;padding-top: 10px ;cursor: zoom-in;"
    onclick="onClick(this)"
    class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third" title="Octoberian">
    <img src="img/sched/2.jpg" style="width:100.1% ;padding-top: 10px;cursor: zoom-in;"
    onclick="onClick(this)"
    class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third" title="1st year C">
    <img src="img/sched/3.jpg" style="width:100.2% ;padding-top: 10px;cursor: zoom-in;"
    onclick="onClick(this)"
    class="w3-hover-opacity">
  </div>

</div>

  <div class="w3-row-padding" style="">

  <div class="w3-container w3-third"  title="2nd year A">
    <img src="img/sched/4.jpg" style="width:100.1% ;padding-top: 10px;cursor: zoom-in;"
    onclick="onClick(this)"
    class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third" title="2nd year C">
    <img src="img/sched/5.jpg" style="width:100.1% ;padding-top: 10px;cursor: zoom-in;"
    onclick="onClick(this)"
    class="w3-hover-opacity">
  </div>


</div>

<div id="m01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-closebtn w3-hover-red w3-container w3-padding-16 w3-display-topright">×</span>
  <img class=" w3-animate-zoom" id="img01" style="width:90%; margin-left: 5%; cursor: zoom-out;">
</div>

<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("m01").style.display = "block";
}
</script>

      <br>
      </div>
      </div>
    </section>
    <!-- /Portfolio -->
<?php include "footer.php" ?>
