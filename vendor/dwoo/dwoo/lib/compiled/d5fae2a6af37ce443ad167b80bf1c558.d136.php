<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div>
    <h3><?php echo $this->scope["pageTitle"];?></h3>
</div>

<div class="row">
    <div class="col-md-10">
        <form method="POST" action="<?php echo Config::get('application_path') .'admin/actions/roomAllocation.php'?>">
            <input type="hidden" name="type" value="<?php echo $this->scope["request_type"];?>">
            <input type="hidden" name="id" value="<?php echo $this->scope["id"];?>">
            <div class="form-horizontal">
                <hr>
                <div class="text-danger validation-summary-valid" data-valmsg-summary="true">
                    <ul>
                        <li style="display:none"></li>
                    </ul>
                </div>

                <?php if ((isset($this->scope["request_type"]) ? $this->scope["request_type"] : null) == 'add') {
?>

                <div class="form-group">
                    <label for="room_name" class="col-md-2 control-label">Room Type</label>
                    <div class="col-md-4">
                        <select class="form-control" name="room_name" id="room_name" data-val="true" data-val-required="The Room Category field is required.">
                            
                            <?php 
$_fh0_data = (isset($this->scope["roomCategoryList"]) ? $this->scope["roomCategoryList"] : null);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['row'])
	{
/* -- foreach start output */
?>
                                <option <?php echo $this->scope["row"]["id"];?> value="<?php echo $this->scope["row"]["room_id"];?>"><?php echo $this->scope["row"]["room_name"];?></option>
                            <?php 
/* -- foreach end output */
	}
}?>
                            
                        </select>
                        <span class="text-danger field-validation-valid" data-valmsg-for="room_name" data-valmsg-replace="true"></span>
                    </div>
                </div>

                <?php 
}
else {
?>

                    <div class="form-group">
                        <label for="room_name_readonly" class="col-md-2 control-label">Room Type</label>
                        <div class="col-md-4">
                        <input type="hidden" name="room_id" value="<?php echo $this->scope["room_id"];?>">
                            <input class="form-control" type="text" id="room_name_readonly" name="room_name_readonly" value="<?php echo $this->scope["room_name"];?>" readonly>
                        </div>
                    </div>

                <?php 
}?>

                <div class="form-group">
                    <label for="door_no" class="col-md-2 control-label">Door No.</label>
                    <div class="col-md-2">
                    <input class="form-control" type="text" data-val="true" data-val-required="The Door No. field is required." id="door_no"
                            name="door_no" value="<?php echo $this->scope["door_no"];?>">
                        <span class="text-danger field-validation-valid" data-valmsg-for="door_no" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="room_status" class="col-md-2 control-label">Room Status</label>
                    <div class="col-md-2">
                        <select class="form-control" name="room_status" id="room_status" data-val="true" data-val-required="The Room Status field is required.">
                            <option <?php echo $this->scope["vacant"];?> value="1">Vacant</option>
                            <option <?php echo $this->scope["occupied"];?> value="2">Occupied</option>
                            <option <?php echo $this->scope["dirty"];?> value="3">Dirty</option>
                        </select>
                        <span class="text-danger field-validation-valid" data-valmsg-for="room_status" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="form-group">
                        <div class="col-md-offset-2 col-md-4">
                            <input type="submit" value="<?php echo $this->scope["buttonName"];?>" class="btn btn-info" />
                        </div>
                    </div>
                <input type="hidden" name="token" value="<?php echo Token::generate();?>">
            </div>
        </form>
    </div>
</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>