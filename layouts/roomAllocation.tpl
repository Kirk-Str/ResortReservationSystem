<div>
    <h3>{$pageTitle}</h3>
</div>

<div class="row">
    <div class="col-md-10">
        <form method="POST" action="<?php echo Config::get('application_path') .'admin/actions/roomdetail.php'?>" enctype="multipart/form-data">
            <input type="hidden" name="type" value="{$request_type}">
            <input type="hidden" name="id" value="{$id}">
            <div class="form-horizontal">
                <hr>
                <div class="text-danger validation-summary-valid" data-valmsg-summary="true">
                    <ul>
                        <li style="display:none"></li>
                    </ul>
                </div>
                <div class="form-group">
                    <label for="room_category" class="col-md-2 control-label">Room Category</label>
                    <div class="col-md-4">
                        <input class="form-control" type="text" data-val="true" data-val-required="The Room Category field is required." id="room_category"
                            name="room_category" value="{$room_category}">
                        <span class="text-danger field-validation-valid" data-valmsg-for="room_category" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="room_door_no" class="col-md-2 control-label">Door No.</label>
                    <div class="col-md-4">
                    <input class="form-control" type="text" data-val="true" data-val-required="The Door No. field is required." id="room_door_no"
                            name="room_door_no" value="{$room_door_no}">
                        <span class="text-danger field-validation-valid" data-valmsg-for="room_door_no" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="room_status" class="col-md-2 control-label">Room Status</label>
                    <div class="col-md-4">
                        <select class="form-control" name="room_status" id="room_status" data-val="true" data-val-required="The Room Status field is required.">
                            <option value="1">Vacant</option>
                            <option value="2">Occupied</option>
                            <option value="3">Dirty</option>
                        </select>
                        <span class="text-danger field-validation-valid" data-valmsg-for="room_status" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="form-group">
                        <div class="col-md-offset-2 col-md-4">
                            <input type="submit" value="{$buttonName}" class="btn btn-info" />
                        </div>
                    </div>
                <input type="hidden" name="token" value="<?php echo Token::generate();?>">
            </div>
        </form>
    </div>
</div>