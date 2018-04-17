<?php
/* template head */
if (class_exists('Dwoo\Plugins\Functions\PluginTruncate')===false)
	$this->getLoader()->loadPlugin('PluginTruncate');
/* end template head */ ob_start(); /* template body */ ?><?php

    //require '..\vendor\autoload.php';

?>

<div>
    <h3>ROOM OVERVIEW</h3>
</div>
<hr> 
<div class="form-group">
    <form action="roomAllocation.php?type=add" method="POST">
        <input type="submit" value="Add New"  class="btn btn-info" />
    </form>
</div>
<div id="room-overview" class="flex-row row">
  <?php 
$_fh0_data = (isset($this->scope["roomAllocationRow"]) ? $this->scope["roomAllocationRow"] : null);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['row'])
	{
/* -- foreach start output */
?>
    <div class="col-xs-2 col-sm-2 col-md-2 clear-padding">
      <div class="thumbnail">
      
      <button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
          <span class="glyphicon glyphicon-edit"></span>
        </button>
        <button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
          <span class="glyphicon glyphicon-remove"></span>
        </button>

        <?php if ((isset($this->scope["row"]["room_status"]) ? $this->scope["row"]["room_status"]:null) == 1) {
?>
          <span class="label label-default pull-right">
            Vacant
          </span>
        <?php 
}
elseif ((isset($this->scope["row"]["room_status"]) ? $this->scope["row"]["room_status"]:null) == 2) {
?>
          <span class="label label-success pull-right">
            Occupied
          </span>
        <?php 
}
else {
?>
          <span class="label label-warning pull-right">
            Dirty
          </span>
        <?php 
}?>
        <div class="caption clear-padding">
          <h3 class="text-center"><?php echo $this->scope["row"]["door_no"];?></h3>
        </div>
        <p class="lead text-center"><?php echo $this->classCall('Dwoo\Plugins\Functions\Plugintruncate', 
                        array((isset($this->scope["row"]["room_type"]) ? $this->scope["row"]["room_type"]:null), 18, '...', false, false));?></p>
      </div>
    </div>
  <?php 
/* -- foreach end output */
	}
}?>
</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>