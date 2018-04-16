<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><?php

    //require '..\vendor\autoload.php';

?>

<div>
    <h3>ROOM OVERVIEW</h3>
</div>
<hr> 

 <div class="row text-lg-left">

  <div class="col-md-2 col-xs-6 clear-padding">
    <a href="#" class="d-block mb-1 h-100">
      <div class=" img-thumbnail">
        <div style="height: 200px;width:400px">R0215</div>
      </div>
    </a>
  </div>

  
</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>