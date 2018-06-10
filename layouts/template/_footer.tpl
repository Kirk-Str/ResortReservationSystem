<footer id="footer-base" class="footer-distributed">

    <div class="text-center" style="margin-bottom: 180px;">
        <img src="<?php echo Config::get('application_path') . './assets/images/LogosIcons/no-one-restaurrant-in-kalpitiya.png'; ?>" style="margin: 40px;">
        <img src="<?php echo Config::get('application_path') . './assets/images/LogosIcons/kitesurfing-logo.png'; ?>"  style="margin: 40px;">
        <img src="<?php echo Config::get('application_path') . './assets/images/LogosIcons/wilpattu-logo.png'; ?>"  style="margin: 40px;">
        <img src="<?php echo Config::get('application_path') . './assets/images/LogosIcons/excellence.png'; ?>"  style="margin: 40px;">
    </div>

        <div class="footer-left">
            <div class="col-md-12">
                <div class="form-group col-lg-4" style="padding-left: 0;">
                    <label for="children">Language</label>
                    <select id="language" class="form-control" name="language">
                        <option>English</option>
                        <option>French</option>
                        <option>Italian</option>
                        <option>German</option>
                    </select>
                </div>
            </div>
            <h3>Orca Beach Resort Ltd.<span></span></h3>
            <p class="footer-links">
                <a asp-area="" asp-controller="Home" asp-action="Index">HOME</a> ·
                <a asp-area="" asp-controller="Home" asp-action="Reservation">RESERVATION</a> ·
                <a asp-area="" asp-controller="Home" asp-action="Suites">SUITES</a> ·
                <a asp-area="" asp-controller="Home" asp-action="Outings">OUTINGS</a> ·
                <a asp-area="" asp-controller="Home" asp-action="Loyality">LOYALITY</a> ·
                <a asp-area="" asp-controller="Home" asp-action="Surroundings">SURROUNDINGS</a> ·
                <a asp-area="" asp-controller="Home" asp-action="Feedback">FEEDBACK</a> ·
                <a asp-area="" asp-controller="Home" asp-action="About">ABOUT</a>
            </p>
            <p class="footer-company-name">Orca Beach Resort Ltd. © <?php echo date("Y"); ?></p>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>1400 E. Southern Ave. Kalpitiya</span>Puttalam, Srilanka</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+94 71 55 123456</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:hello@orcabeach.com">hello@orcabeach.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                Hotel Happy Holiday delivers one-of-a-kind lifestyle experiences that bring together world class serivce and extraordinary style in sought-after locations.
                Signature brand amenities and services created for the diverse business and leisure guests include
                dynamic dining venues featuring world-class culinary talents and destination spas specializing in health, fitness, and beauty.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook fa-facebook-square"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div>
        </div>
</footer>