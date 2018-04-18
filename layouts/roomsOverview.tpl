<?php

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
  {foreach $roomAllocationRow row}

  <a href="./roomSwapping.php">

    <div class="col-xs-2 col-sm-2 col-md-2 clear-padding">
      
        <div class="thumbnail">

          <a href="./roomAllocation.php?type=edit&id={$row.id}&roomId={$row.room_id}" class="close pull-left">
            <span class="glyphicon glyphicon-edit"></span>
          </a>
          
          <a href="./roomAllocation.php?type=delete&id={$row.id}&roomId={$row.room_id}" class="close pull-left">
            <span class="glyphicon glyphicon-remove"></span>
          </a>

          {if $row.room_status == 1}
            <span class="label label-default pull-right">
              Vacant
            </span>
          {elseif $row.room_status == 2}
            <span class="label label-success pull-right">
              Occupied
            </span>
          {else}
            <span class="label label-warning pull-right">
              Dirty
            </span>
          {/if}
          <div class="caption clear-padding">
            <h3 class="text-center">{$row.door_no}</h3>
          </div>
          <p class="lead text-center">{truncate $row.room_type 18 }</p>
        </div>
      
    </div>

    </a>
  {/foreach}
</div>