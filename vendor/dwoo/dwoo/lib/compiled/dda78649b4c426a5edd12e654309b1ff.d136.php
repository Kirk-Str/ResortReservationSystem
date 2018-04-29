<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div>
    <h3><?php echo $this->scope["pageTitle"];?></h3>
</div>

<div class="row">
    <div class="col-md-10">
        <form method="POST" action="<?php echo Config::get('application_path') .'admin/actions/roomSwapping.php'?>">
            <input type="hidden" name="reservation_id" value="<?php echo $this->scope["reservationId"];?>">
            <div class="form-horizontal">
                <hr>
                <div class="text-danger validation-summary-valid" data-valmsg-summary="true">
                    <ul>
                        <li style="display:none"></li>
                    </ul>
                </div>

                <div class="form-group">
                    <label for="current_room_name" class="col-md-3 control-label">Current Room Type.</label>
                    <div class="col-md-3">
                        <input class="form-control" type="text" id="current_room_name" name="current_room_name" value="<?php echo $this->scope["current_room_name"];?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="current_room_door_no" class="col-md-3 control-label">Current Room No.</label>
                    <div class="col-md-3">
                        <input class="form-control" type="text" id="current_room_door_no" name="current_room_door_no" value="<?php echo $this->scope["current_room_door_no"];?>" readonly>
                    </div>
                </div>
                <hr>

                <div class="form-group">
                    <label for="new_room_no" class="col-md-3 control-label">Swapping To Room No.</label>
                    <div class="col-md-3">
                        <select class="form-control" name="new_room_no" id="new_room_no" data-val="true" data-val-required="The Room No. field is required.">

                        <?php 
$_fh0_data = (isset($this->scope["roomList"]) ? $this->scope["roomList"] : null);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['row'])
	{
/* -- foreach start output */
?>
                            <option value="<?php echo $this->scope["row"]["room_no"];?>"><?php echo $this->scope["row"]["door_no"];?></option>
                        <?php 
/* -- foreach end output */
	}
}?>

                        </select>
                        <span class="text-danger field-validation-valid" data-valmsg-for="new_room_no" data-valmsg-replace="true"></span>
                    </div>
                </div>

                <div class="form-group">
                        <div class="col-md-2 col-md-offset-3">
                            <input type="submit" value="<?php echo $this->scope["buttonName"];?>" class="btn btn-block btn-info" />
                        </div>
                    </div>
                <input type="hidden" name="token" value="<?php echo Token::generate();?>">
            </div>
        </form>
    </div>
</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>