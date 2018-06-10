<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>﻿<div class="container">
    <h2 class="wow fadeInDown">
        <?php echo $this->scope["message"];?>
    </h2>
    <p class="para wow fadeInDown">
        <?php echo $this->scope["subMessage"];?> <?php echo $this->scope["gotoPage"];?>
    </p>
</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>