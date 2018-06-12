
<div class="container">
<h2 class="wow fadeInDown text-center">
    Orca trademark Rooms &amp; Cabana
</h2>
<p class="para wow fadeInDown">
    With 42 rooms and suites in total, each offering a unique and memorable experience. All rooms are air conditioned and equipped with a Widescreen 58" TV mounted on the wall and Wi-Fi. Each unit also has a work desk and a private bathroom with hairdryer. Complimentary mineral water is available in each room. Enjoy the comfort and luxury that Holiday™ offers.
</p>
<div class="jumbotron jstyle j-suites wow fadeInDown">
</div>


<h2 class="text-center row-offset-1">A window full of water. Every comfort at your command!</h2>
<hr class="goldenbreak-2px-limited">
<p class="para text-center">
    Get ready for a world class holiday experience with Orca Beach Resort hospitality.
</p>


<div class="row">
    <div class="col-md-3 col-sm-1  text-center row-offset-1">
        <img src="assets/images/LogosIcons/chef.png" width="128" height="128" />
        <h4>Star Rating Chef</h4>
    </div>
    <div class="col-md-3 col-sm-1  text-center  row-offset-1">
        <img src="assets/images/LogosIcons/24h-service.png" width="128" height="128" />
        <h4>24h Services</h4>
    </div>
    <div class="col-md-3 col-sm-1  text-center  row-offset-1">
        <img src="assets/images/LogosIcons/laundry.png" width="128" height="128" />
        <h4>Free Laundry</h4>
    </div>
    <div class="col-md-3 col-sm-1  text-center  row-offset-1">
        <img src="assets/images/LogosIcons/taxi-service.png" width="128" height="128" />
        <h4>24h Taxi Service</h4>
    </div>
</div>

</div>

</br>
</br>
</br>
</br>
</br>
<p class="para font-weight-bold text-center text-uppercase  wow fadeInDown"><strong>Select from the wide range of villas and cabana options</strong></p>

    
</br>
</br>

{foreach $suitesList val}

    {if $dwoo.foreach.default.index % 2 == 0}
    <div class="beige">
    <div class="container">
        <div class="row featurette wow fadeInRight" data-wow-duration="500ms" data-wow-delay="400ms">
            <div class="col-md-8 col-md-push-4">
                <h2 class="featurette-heading featurette-text">{$val.room_name} <span class="text-muted">{$val.caption}</span></h2>
                <p class="lead featurette-text">{$val.description}</p>
            </div>
            <div class="col-md-4 col-md-pull-8">
                <img class="featurette-image img-responsive center-block" src="data:image;base64,{$val.thumbnail}" data-holder-rendered="true">
            </div>
        </div>
    </div>
</div>

    {else}

    <div class="container">
        <div class="row featurette wow fadeInRight" data-wow-duration="500ms" data-wow-delay="400ms">
        <div class="col-md-8">
            <h2 class="featurette-heading featurette-text">{$val.room_name} <span class="text-muted">{$val.caption}</span></h2>
            <p class="lead featurette-text">{$val.description}</p>
        </div>
        <div class="col-md-4">
            <img class="featurette-image img-responsive center-block" src="data:image;base64,{$val.thumbnail}" data-holder-rendered="true">
        </div>
        </div>
        </div>
    {/if}

{/foreach}


<div class="container">
    {$explore}
</div>