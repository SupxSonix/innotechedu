<?php include"header.php"; ?>
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="section-title">Message Us</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 offset-lg-2">
            <div class="info">
              <div>
                <a id="mapss" style="text-decoration: none;" href="https://www.google.com.ph/maps/place/Innovative+Technological+College+of+the+Philippines/@10.2455127,123.7957049,21z/data=!4m19!1m13!4m12!1m4!2m2!1d123.8284149!2d10.2657099!4e1!1m6!1m2!1s0x33a977e212cf4535:0x54164679e25825b!2sInnovative+Technological+College+of+the+Philippines,+R.+Larrobis+Bldg,+Minglanilla,+Cebu!2m2!1d123.7957677!2d10.2455163!3m4!1s0x33a977e212cf4535:0x54164679e25825b!8m2!3d10.2455163!4d123.7957677?hl=en-PH" target="_blank">
                <i class="fa fa-map-marker"></i>
                <p>2nd flr. R. Larrobis, blgd. <br>Poblacion Ward IV, Minglanilla, Cebu</p>
                </a>
              </div>

              <div>
                <i class="fa fa-google"></i>
                <p>innotechedu@gmail.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>239-5543</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="mail.php" method="post" role="form" class="contactForm">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Complete Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="text-transform: capitalize;" required />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required />
                    <div class="validation"></div>
                  </div>

                    <div>
                    <noscript>
                    	<div style="width: 302px; height: 422px;">
                    		<div style="width: 302px; height: 422px; position: relative;">
                    			<div style="width: 302px; height: 422px; position: absolute;">
                    				<iframe src="https://www.google.com/recaptcha/api/fallback?k=6LfXe1wUAAAAAEmE_F8ftp9QB8jZGsivbs5iHomo" frameborder="0" scrolling="no" style="width: 302px; height:422px; border-style: none;">
                    				</iframe>
                    			</div>
                    			<div style="width: 300px; height: 60px; border-style: none; bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px; background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
                    				<textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;">
                    				</textarea>
                    			</div>
                    		</div>
                    	</div>
                    </noscript>
                    </div>


                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" style="text-transform: capitalize;" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required ></textarea>
                    <div class="validation"></div>
                  </div>
                  <div class="text-center"><button  style="cursor: pointer;" type="submit"  name="submit"> Send Message </button></div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>
       <!-- Team -->
    <section class="team" id="team">
      <div class="container">
        <h2 class="text-center">
          Innovator's Group
        </h2>

        <div class="row">
          <div class="col-sm-3 col-xs-6" style="text-align: center;">
            <div class="card card-block">
              <a ><img alt="" class="team-img" src="img/group/jason.jpg">
              <div class="card-title-wrap">
                <span class="card-title" style="font-size: 18px">Jason Suaybaguio</span> <span class="card-text">Programmer</span>
              </div>

              <div class="team-over">
                <h4 class="hidden-md-down">
                  Connect with me
                </h4>

                <nav class="social-nav">
                  <a href="https://www.facebook.com/jasonnavacilla.suaybaguio" target="_blank" title="facebook">
                      <i class="fa fa-facebook"></i></a>

                </nav>

                <p>
                  <i class="fa fa-phone" title="phone"></i><br> 09481471961
                </p>

              </div>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6" style="text-align: center;">
            <div class="card card-block">
              <a ><img alt="" class="team-img" src="img/group/jesel.jpg">
              <div class="card-title-wrap">
                <span class="card-title" style="font-size: 18px">Jessel Anne Lazaga</span> <span class="card-text">Analyst</span>
              </div>

              <div class="team-over">
                <h4 class="hidden-md-down">
                  Connect with me
                </h4>

                <nav class="social-nav">
                  <a href="https://www.facebook.com/profile.php?id=100005187107782" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a>

                </nav>

                <p>
                  <i class="fa fa-phone" title="phone"></i><br> 09481471961
                </p>

              </div>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6" style="text-align: center;">
            <div class="card card-block">
              <a ><img alt="" class="team-img" src="img/group/jenny.jpg">
              <div class="card-title-wrap">
                <span class="card-title" style="font-size: 18px">Jenny Mae Gearaldez</span> <span class="card-text">Web Designer</span>
              </div>

              <div class="team-over">
                <h4 class="hidden-md-down">
                  Connect with me
                </h4>

                <nav class="social-nav">
                  <a href="https://www.facebook.com/MugiwaraYaaaa"  target="_blank" title="facebook"><i class="fa fa-facebook"></i></a>

                </nav>

                <p>
                  <i class="fa fa-phone" title="phone"></i><br> 09429715565
                </p>

              </div>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6" style="text-align: center;">
            <div class="card card-block">
              <a ><img alt="" class="team-img" src="img/group/melvin.jpg">
              <div class="card-title-wrap">
                <span class="card-title" style="font-size: 18px">Melvin Jay Cubio</span> <span class="card-text">Researcher</span>
              </div>

              <div class="team-over">
                <h4 class="hidden-md-down">
                  Connect with me
                </h4>

                <nav class="social-nav">
                  <a href="https://www.facebook.com/melvin.jay.927" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a>

                </nav>

                <p>
                  <i class="fa fa-phone" title="phone"></i><br> 09481471961
                </p>

              </div>
            </div>
          </div>



          <div class="col-sm-3 col-xs-6" >
            <div class="card card-block">
              <a ><img alt="" class="team-img" src="img/group/abel.jpg">
              <div class="card-title-wrap">
                <span class="card-title" style="font-size: 18px">Mary Grace Abel</span> <span class="card-text">Researcher</span>
              </div>

              <div class="team-over">
                <h4 class="hidden-md-down">
                  Connect with me
                </h4>

                <nav class="social-nav">
                  <a href="https://www.facebook.com/marygrace.abel.7" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a>

                </nav>

                <p>
                  <i class="fa fa-phone" title="phone"></i><br> 09423779956
                </p>

              </div>
            </div>
          </div>



      </div>
    </section>
    <!-- /Team -->
<?php include "footer.php" ?>
