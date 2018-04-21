<div>
    <h3>{$pageTitle}</h3>
</div>

<div class="row">
    <div class="col-md-10">
        <form method="POST" action="<?php echo Config::get('application_path') .'admin/actions/roomAllocation.php'?>">
            <input type="hidden" name="id" value="{$id}">
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
                        <input class="form-control" type="text" id="current_room_name" name="current_room_name" value="{$current_room_name}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="current_room_no" class="col-md-3 control-label">Current Room No.</label>
                    <div class="col-md-3">
                        <input class="form-control" type="text" id="current_room_no" name="current_room_no" value="{$current_room_no}" readonly>
                    </div>
                </div>
                <hr>

                <div class="form-group">
                    <label for="new_room_no" class="col-md-3 control-label">Room No.</label>
                    <div class="col-md-3">
                        <select class="form-control" name="new_room_no" id="new_room_no" data-val="true" data-val-required="The Room No. field is required.">

                        {foreach $roomList row}
                            <option value="{$row.id}">{$row.door_no}</option>
                        {/foreach}

                        </select>
                        <span class="text-danger field-validation-valid" data-valmsg-for="new_room_no" data-valmsg-replace="true"></span>
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