<div class="banner-wrapper">

    <div id="mycarousal" class="carousel slide" data-ride="carousel" data-interval="6000">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="./assets/images/contentImages/huts.jpg" class="img-responsive" />
            </div>
            <div class="item ">
                <img src="./assets/images/contentImages/kitesurfing-cover.jpg" class="img-responsive" />
            </div>
            <div class="item">
                <img src="./assets/images/contentImages/whalewatching-cover.jpg" class="img-responsive" />
            </div>
        </div>
    </div>

    <form class="reservation-form" method="POST" action="./actions/availability.php">

        <h2 class="wow fadeInDown">Enjoy your tailor made holiday and other special events at Orca Beach Resort</h2>
        <h3 class="wow fadeInDown">Seal the deal &amp; Explore the your world, Today</h3>

        <div class="text-center">
            <div class="reservation-bar wow fadeInDown res-page">
                <div class="form-group">
                    <label for="check_in">Check In</label>
                    <input name="daterange" class="form-control" id="check_in" type="text" required />
                    <input type="hidden" name="check_in_h" id="check_in_h" value="" />
                </div>
                <div class="form-group">
                    <label for="check_out">Check Out</label>
                    <input name="daterange" class="form-control" id="check_out" type="text" required />
                    <input type="hidden" name="check_out_h" id="check_out_h" value="" />
                </div>
                <div class="form-group">
                    <label for="adults">Adults</label>
                    <select id="adults" class="form-control" name="adults" required>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="children">Children</label>
                    <select id="children" class="form-control" name="children">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="promotion">Promotion Code</label>
                    <input id="promotionCode" class="form-control" type="text" name="promotioncode" />
                </div>
                <input type="submit" class="btn btn-submit" value="Check Availability" />
            </div>
        </div>
    </form>
</div>

<div class="beige-">
    <div class="container" style="margin-top: 30px">
        <div class="text-center featurette-text">
            <h2>We offer great deals that gives you a royal experience!</h2>
            <hr class="goldenbreak-2px-limited">
            <p class="para">Whether it's wedding party, honeymoon or birthday party, we cater you the best deal in Srilanka that you can never forget. Please choose our offer from wide range of unbelievable price.</p>
        </div>
        <div class="row featurette-text">

            {foreach $offersList row}

            <div class="col-md-4 col-sm-1">
                <section class="card">
                    <img class="featurette-image img-responsive card-img-top center-block" src="data:image;base64,{$row.thumbnail}" data-holder-rendered="true">
                    <h3>{$row.caption}</h3>
                    <p class="lead">{$row.description}</p>
                    <p>
                        {if $userType == 2 }
                        <a href="./offerRequest.php?type=add&offerId={$row.offer_id}" class="btn btn-submit">Book Now</a> {else}
                        <a href="#" class="btn btn-submit" data-toggle="modal" data-target=".bs-example-modal-lg">Book Now</a> {/if}
                    </p>
                    <hr class="goldenbreak-5px" />
                </section>
            </div>

            {/foreach}
        </div>
    </div>
</div>
<div class="beige">
    <div class="container">
        <div class="row featurette wow fadeInRight" data-wow-duration="500ms" data-wow-delay="400ms">
            <div class="col-md-8 col-md-push-4">
                <h2 class="featurette-heading featurette-text">Unbelievable Cabana options with spectacular views. <span class="text-muted">Sitback and enjoy the view!</span></h2>
                <p class="lead featurette-text">
                        With 20 cabanas and villas in total, each offering a unique and memorable relaxing experience. All cabanas are naturally air cooled and with open-top bathroom with towels and shower facility. The Tastefully-furnished unit has a terrace with relaxing chairs. Complimentary mineral water is available in each room. And yes ofcourse it comes with Wi-Fi. 
                </p>
            </div>
            <div class="col-md-4 col-md-pull-8 clear-padding">
                <img class="featurette-image img-responsive center-block" src="assets/images/contentImages/cabana-delux.jpg" data-holder-rendered="true">
            </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="row featurette wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">

        <div class="col-md-8 ">
            <h2 class="featurette-heading  featurette-text">Mouthwatering Authentic Foods. <span class="text-muted">It's delicious!</span></h2>
            <p class="lead  featurette-text">
                The Restaurant at Orca Beach Resort provides star-rated catering from our acclaimed chef, Gordon Ramsay. Mouthwatering authentic srilankan foods with gourmet quality with extra caring in catering. Enjoy the Orca's Restaurant's authentic Srilankan cuisine as well as wide verity of international cuisine foods.
            </p>
        </div>
        <div class="col-md-4 clear-padding">
            <img class="featurette-image img-responsive center-block" src="assets/images/contentImages/authentic-food.jpg" data-holder-rendered="true">
        </div>
    </div>
</div>
<div class="beige">
    <div class="container">
        <div class="row featurette wow fadeInRight" data-wow-duration="500ms" data-wow-delay="200ms">
            <div class="col-md-8  col-md-push-4">
                <h2 class="featurette-heading  featurette-text">Awe Inspiring Natural Attractions. <span class="text-muted">It'll blow your mind.</span></h2>
                <p class="lead  featurette-text">Orca Beach Resort is surrounded by several important places like the pristine beach, largest coral reefs, national wild reservation parks, best surfing water lake in the region, one of the worlds largest whale's concentrations, Asia's largest elephant concentrations and more other UNESCO heritage sites that cannot ignore visiting while you are in Srilanka!</p>
            </div>
            <div class="col-md-4 col-md-pull-8 clear-padding">
                <img class="featurette-image img-responsive center-block" src="assets/images/contentImages/attractions.png" data-holder-rendered="true">
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
    </div>
</div>
</div>
<div class="container">
    {$explore}
</div>