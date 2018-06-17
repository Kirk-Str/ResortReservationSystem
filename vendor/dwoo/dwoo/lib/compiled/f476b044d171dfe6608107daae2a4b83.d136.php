<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>

<div class="container">
        <h2 class="wow fadeInDown text-center">
           Wedding at Orca Beach Resort
        </h2>
        <p class="para wow text-center fadeInDown">
           Cobalt blue seas, stunning white sands and lush greenery: the Orca Beach Resort offers one of the world’s most picturesque settings for a wedding. From an intimate beachside ceremony to a large family celebration, weddings at our Orca Beach Resort in Kalpitiya are joyous, romantic affairs. 
        </p>
        <br>
        <br>
        <div id="wedding-page">
        </div>
        <h2 class="text-center row-offset-1 wow fadeIn">Say I Do to a Story to Tell and a Romance to Live Forever</h2>
        <hr class="goldenbreak-2px-limited">
        <p class="para wow fadeInDown text-center">
           With an unforgettable picturesque backdrop full of passion and romance, choose Orca Beach Resort for your perfect Tropical Destination Wedding. Celebrate your big day with your intimate family and friends and combine your wedding and honeymoon at Orca Beach Resort.
        </p>
        <div class="row">
           <div class="col-md-2 col-sm-4 text-center row-offset-1 col-md-offset-1">
              <img src="assets/images/logosIcons/spa.png" width="128" height="128" />
              <h4>Spa</h4>
           </div>
           <div class="col-md-2 col-sm-4 text-center  row-offset-1">
              <img src="assets/images/logosIcons/makeup.png" width="128" height="128" />
              <h4>Bridal Makeup</h4>
           </div>
           <div class="col-md-2 col-sm-4 text-center  row-offset-1">
              <img src="assets/images/logosIcons/catering.png" width="128" height="128" />
              <h4>Catering Services</h4>
           </div>
           <div class="col-md-2 col-sm-4 text-center  row-offset-1">
              <img src="assets/images/logosIcons/organize.png" width="128" height="128" />
              <h4>Arrangements and Organizing Party</h4>
           </div>
           <div class="col-md-2 col-sm-4 text-center  row-offset-1">
              <img src="assets/images/logosIcons/affordable.png" width="128" height="128" />
              <h4>Afforable Price</h4>
           </div>
        </div>
        <div class="row row-offset-1">
           <div class="col-md-12">
              <p class="para-b">
                 Couples planning their wedding in the Srilanka will be seduced by the stunning landscapes that surround our Orca Beach resort. Secluded beaches and the expansive, sparkling Indian Ocean offer the perfect canvas against which to create the ultimate wedding. Leaning palm trees and lapping waves will accompany your wedding vows – it is a fairy-tale picture and one that you will cherish forever.
              </p>
              <p class="para-b">
                 Dine al fresco on the beach while a live band plays, and dance under the stars as your wedding day comes to an end. The next day, you and your guests can relax in sumptuous villas or beach bungalows and recover from the wedding revelries with a spa treatment.
              </p>
           </div>
           <!-- <div class="col-md-4" style="padding: 20px;">
              <img src="assets/images/home/Loyality Logo.jpg" class="img-responsive" />
              <button type="button" class="btn btn-block btn-lg btn-submit" style="margin-top: 40px;" data-toggle="modal" data-target=".bs-example-modal-lg">Plan Now</button>
           </div> -->
        </div>
        <!-- Server Side script required for dynamic validation for this functionality-->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
           <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h3 class="modal-title" id="myLargeModalLabel">Registration Required</h3>
                 </div>
                 <p class="modal-body lead">You need to be a registered member of Holiday&trade; to have access this facility. </p>
              </div>
           </div>
        </div>
        </br>
        </br>
        </br>
        </br>
        </br>
        <p class="para font-weight-bold text-center text-uppercase  wow fadeInDown"><strong>Other memorable events just as special as your wedding</strong></p>
        </br>
        </br>
</div>
<div class="beige">
    <div class="container">
        <div class="row featurette wow fadeInRight" data-wow-duration="500ms" data-wow-delay="1000ms">
            <div class="col-md-7">
                <h2 class="featurette-heading  featurette-text">Birthday Party<span class="text-muted"> A truly memorable celebration.</span></h2>
                <p class="lead  featurette-text">
                        Just about any celebration, Orca Beach Resort is an absolutely perfect location for the great day. Birthday celebrations at Kalpitiya beach, especially in Orca Beach Resort is truly a joyful place. Blue peaceful beach, multi-cuisine restaurant, party decorations, boozing, a mascot for kids etc. all services are at your fingertip.
                </p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="assets/images/contentImages/birthday.jpg" data-holder-rendered="true">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row featurette wow fadeInRight" data-wow-duration="500ms" data-wow-delay="1200ms">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading  featurette-text">Your honeymoon day. <span class="text-muted">As romantic as it gets.</span></h2>
            <p class="lead  featurette-text">Make your honeymoon day as Hollywood as possible. Orca Beach Restaurant provides the tailor made couple time to you whether you are newly married or you are planning on celebrating your anniversary.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="assets/images/contentImages/romantic.jpg" data-holder-rendered="true">
        </div>
    </div>
</div>
<div class="container">
    <?php echo $this->scope["explore"];?>
</div>
     
     <?php  /* end template body */
return $this->buffer . ob_get_clean();
?>