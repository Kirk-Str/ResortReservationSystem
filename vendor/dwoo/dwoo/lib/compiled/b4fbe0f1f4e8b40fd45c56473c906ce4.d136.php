<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><h2 class="wow fadeInDown">
    HOLIDAY'S SUITES&trade;
</h2>
<p class="para-b wow fadeInDown">
    With 42 rooms and suites in total, each offering a unique and memorable experience. All rooms are air conditioned and equipped with a Widescreen 58" TV mounted on the wall and Wi-Fi. Each unit also has a work desk and a private bathroom with hairdryer. Complimentary mineral water is available in each room. Enjoy the comfort and luxury that Holiday™ offers.
</p>
<div class="jumbotron jstyle j-suites wow fadeInDown">
</div>


<h2 class="text-center row-offset-1">Feel the Luxury in everything!</h2>

<h3 class="text-center">
    
</h3>

<div class="row row-offset-1">
    <div class="col-md-3 col-sm-1 text-center">
        <img src="assets/images/home/chef.png" width="128" height="128" />
        <h4>Star Rating Chef</h4>
    </div>
    <div class="col-md-3 col-sm-1 text-center">
        <img src="assets/images/home/check-in.png" width="128" height="128" />
        <h4>24h Services</h4>
    </div>
    <div class="col-md-3 col-sm-1 text-center">
        <img src="assets/images/home/shirt.png" width="128" height="128" />
        <h4>Free Laundry</h4>
    </div>
    <div class="col-md-3 col-sm-1 text-center">
        <img src="assets/images/home/taxi.png" width="128" height="128" />
        <h4>24h Taxi Service</h4>
    </div>

</div>

<hr class="goldenbreak-2px">
<div class="row-offset-1"></div>
<?php 
$_fh0_data = (isset($this->scope["suitesList"]) ? $this->scope["suitesList"] : null);
$this->globals["foreach"]['default'] = array
(
	"index"		=> 0,
	"iteration"		=> 1,
	"last"		=> null,
	"total"		=> $this->count($_fh0_data),
);
$_fh0_glob =& $this->globals["foreach"]['default'];
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['val'])
	{
		$_fh0_glob["last"] = (string) ($_fh0_glob["iteration"] === $_fh0_glob["total"]);
/* -- foreach start output */
?>


    <?php if ((isset($this->globals["foreach"]["default"]["index"]) ? $this->globals["foreach"]["default"]["index"]:null)%2 == 0) {
?>

        <div class="row featurette wow fadeInRight" data-wow-duration="500ms" data-wow-delay="400ms">
            <div class="col-md-8 col-md-push-4">
                <h2 class="featurette-heading"><?php echo $this->scope["val"]["room_name"];?> <span class="text-muted"><?php echo $this->scope["val"]["caption"];?></span></h2>
                <p class="lead"><?php echo $this->scope["val"]["description"];?></p>
            </div>
            <div class="col-md-4 col-md-pull-8">
                <img class="featurette-image img-responsive center-block" src="data:image;base64,<?php echo $this->scope["val"]["thumbnail"];?>" data-holder-rendered="true">
            </div>
        </div>
    <?php 
}
else {
?>

        <div class="row featurette wow fadeInRight" data-wow-duration="500ms" data-wow-delay="400ms">
        <div class="col-md-8">
            <h2 class="featurette-heading"><?php echo $this->scope["val"]["room_name"];?> <span class="text-muted"><?php echo $this->scope["val"]["caption"];?></span></h2>
            <p class="lead"><?php echo $this->scope["val"]["description"];?></p>
        </div>
        <div class="col-md-4">
            <img class="featurette-image img-responsive center-block" src="data:image;base64,<?php echo $this->scope["val"]["thumbnail"];?>" data-holder-rendered="true">
        </div>
        </div>
    <?php 
}?>


<?php 
/* -- implode */
if (!$_fh0_glob["last"]) {
	echo '<hr class="featurette-divider">';
}
/* -- foreach end output */
		$_fh0_glob["index"]+=1;
		$_fh0_glob["iteration"]+=1;
	}
}?>



<?php echo $this->scope["explore"];
 /* end template body */
return $this->buffer . ob_get_clean();
?>