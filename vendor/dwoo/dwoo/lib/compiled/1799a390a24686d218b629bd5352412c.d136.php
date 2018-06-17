<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class="banner-wrapper">
    <div id="mycarousal" class="carousel slide" data-ride="carousel" data-interval="6000">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="assets/images/contentImages/beach-with-hut.jpg" class="img-responsive" />
            </div>
        </div>
    </div>

    <form class="reservation-form" method="POST" action="./actions/availability.php">
        <h2 class="wow fadeInDown">Amazing views of the Arabian oceans expansive beauty. Watch dolphins play, local surfers enjoying Daytona’s breaking waves and awe-inspiring sunsets.</h2>
        <h3 class="wow fadeInDown">Seal the deal &amp; live your life, Today</h3>

        <div class="text-center">
        <div class="reservation-bar wow fadeInDown res-page">
            <div class="form-group">
                <label for="check_in">Check In</label>
                <input name="daterange" class="form-control" id="check_in" type="text" required />
                <input type="hidden" name="check_in_h" id="check_in_h"  value="" />
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

<div class="container">
    <h2 class="text-center row-offset-1 wow fadeIn">We offer great deals that gives you a royal experience!</h2>
    <hr class="goldenbreak-2px-limited">
    <p class="para text-center">
        Whether it's wedding party, honeymoon or birthday party, we cater you the best deal in Srilanka that you can never forget. Please choose our offer from wide range of packages under unbelievable price.
    </p>

    <div class="row">
        <div class="col-md-2 col-sm-4 text-center row-offset-1 col-md-offset-1">
            <img src="assets/images/logosIcons/affordable.png" width="128" height="128" />
            <h4>Afforable Rates</h4>
        </div>
        <div class="col-md-2 col-sm-4 text-center  row-offset-1">
        <img src="assets/images/logosIcons/wifi.png" width="128" height="128" />
            <h4>Free Wi-Fi</h4>
        </div>
        <div class="col-md-2 col-sm-4 text-center  row-offset-1">
            <img src="assets/images/logosIcons/drinks.png" width="128" height="128" />
            <h4>Complementary Drinks</h4>
        </div>
        <div class="col-md-2 col-sm-4 text-center  row-offset-1">
            <img src="assets/images/logosIcons/organize.png" width="128" height="128" />
            <h4>Arrangements and Organizing</h4>
        </div>
        <div class="col-md-2 col-sm-4 text-center  row-offset-1">
            <img src="assets/images/logosIcons/newspaper.png" width="128" height="128" />
                <h4>Complementary Newspapers</h4>
        </div>
    </div>

</div>

</br>
</br>
</br>
</br>
</br>
<p class="para font-weight-bold text-center text-uppercase  wow fadeInDown">
<strong>Select from the wide range of special offers for your special day</strong>
</p>
</br>
</br>

<?php 
$_fh0_data = (isset($this->scope["offersList"]) ? $this->scope["offersList"] : null);
$this->globals["foreach"]['default'] = array
(
	"index"		=> 0,
);
$_fh0_glob =& $this->globals["foreach"]['default'];
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['val'])
	{
/* -- foreach start output */
?>

    <?php if ((isset($this->globals["foreach"]["default"]["index"]) ? $this->globals["foreach"]["default"]["index"]:null)%2 == 0) {
?>

        <div class="beige">
            <div class="container">
                <div class="row featurette wow fadeInRight" data-wow-duration="500ms" data-wow-delay="400ms">
                    <div class="col-md-8 col-md-push-4">
                        <h2 class="featurette-heading featurette-text"><?php echo $this->scope["val"]["offer_name"];?> <span class="text-muted"><?php echo $this->scope["val"]["caption"];?></span></h2>
                        <p class="lead featurette-text"><?php echo $this->scope["val"]["description"];?></p>
                    </div>
                    <div class="col-md-4 col-md-pull-8">
                        <img class="featurette-image img-responsive center-block" src="data:image;base64,<?php echo $this->scope["val"]["thumbnail"];?>" data-holder-rendered="true">
                    </div>
                </div>
            </div>
        </div>

    <?php 
}
else {
?>

        <div class="container">
            <div class="row featurette wow fadeInRight" data-wow-duration="500ms" data-wow-delay="400ms">
                <div class="col-md-8">
                    <h2 class="featurette-heading featurette-text"><?php echo $this->scope["val"]["offer_name"];?> <span class="text-muted"><?php echo $this->scope["val"]["caption"];?></span></h2>
                    <p class="lead featurette-text"><?php echo $this->scope["val"]["description"];?></p>
                </div>
                <div class="col-md-4">
                    <img class="featurette-image img-responsive center-block" src="data:image;base64,<?php echo $this->scope["val"]["thumbnail"];?>" data-holder-rendered="true">
                </div>
            </div>
        </div>

    <?php 
}?>

<?php 
/* -- foreach end output */
		$_fh0_glob["index"]+=1;
	}
}?>



<div class="container">
    <?php echo $this->scope["explore"];?>
</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>