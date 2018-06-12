<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class="container">
    
    <h2 class="wow fadeInDown text-center">
        Say I Do to a Story to Tell and a Romance to Live Forever
    </h2>

    <p class="para wow fadeInDown">
        With an unforgettable picturesque backdrop full of passion and romance, choose Orca Beach Resort for your perfect Tropical Destination Wedding. Celebrate your big day with your intimate family and friends and combine your wedding and honeymoon at Orca Beach Resort.
    </p>
    <br><br>
    
<div id="wedding-page">

</div>


<h2 class="text-center row-offset-1 wow fadeIn">Having Holiday's Loyality&trade; is Royality</h2>
<hr class="goldenbreak-2px-limited">
<p class="para text-center">
    Get ready for a world class lounging experience with Holiday's Loyality&trade; Program.
</p>


<div class="row">
    <div class="col-md-2 col-sm-4 text-center row-offset-1 col-md-offset-1">
        <img src="assets/images/LogosIcons/spa.png" width="128" height="128" />
        <h4>Spa</h4>
    </div>
    <div class="col-md-2 col-sm-4 text-center  row-offset-1">
        <img src="assets/images/LogosIcons/makeup.png" width="128" height="128" />
        <h4>Bridal Makeup</h4>
    </div>
    <div class="col-md-2 col-sm-4 text-center  row-offset-1">
        <img src="assets/images/LogosIcons/catering.png" width="128" height="128" />
        <h4>Catering Services</h4>
    </div>
    <div class="col-md-2 col-sm-4 text-center  row-offset-1">
        <img src="assets/images/LogosIcons/organize.png" width="128" height="128" />
        <h4>Arrangements and Organizing Party</h4>
    </div>
    <div class="col-md-2 col-sm-4 text-center  row-offset-1">
        <img src="assets/images/LogosIcons/affordable.png" width="128" height="128" />
        <h4>Afforable Price</h4>
    </div>
</div>

<div class="row row-offset-1">
    <div class="col-md-8">
        <p class="para-b">
            With the Holiday's Loyality&trade; guests now have the opportunity to receive added recognition and rewards when staying with Hotel Happy Holidays&trade;, 
            Holiday's Loyality&trade; offers a genuinely new approach to recognizing guests including amazing local experiences wherever you travel in Dover.
            The Holiday's Loyality&trade; program offers three levels of membership: Gold, Platinum and Black. 
            These levels are based on the number of nights you stay at Hotel Happy Holidays&trade; in Dover. 
            The more nights you spend with us, the more amazing your membership benefits and local experiences will be. 
            It is easy to join and you will start earning benefits on your first stay.
        </p>
    </div>
    <div class="col-md-4" style="padding: 20px;">
        <img src="assets/images/home/Loyality Logo.jpg" class="img-responsive" />
        <button type="button" class="btn btn-block btn-lg btn-submit" style="margin-top: 40px;" data-toggle="modal" data-target=".bs-example-modal-lg">Join Now</button>
    </div>
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

<?php echo $this->scope["explore"];?>

</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>