<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class="container">
    <div>
        <h3>RESERVATION DETAIL</h3>
    </div>

    <div class="row block col-md-7">
        <div class="col-md-12  text-center clear-padding">
            <div class="header">
                <h4>CHECK-IN AND CHECK-OUT</h4>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-md-12">
                        <!-- <form method="POST" action="" novalidate="novalidate"> -->
                            <input type="hidden" name="type" id="type" value="<?php echo $this->scope["type"];?>" />
                            <div class="form-horizontal">
                                <div class="text-danger validation-summary-valid" data-valmsg-summary="true">
                                    <ul>
                                        <li style="display:none"></li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label for="email_id" class="col-md-3 control-label">Reservation Id</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" value="<?php echo $this->scope["reservationId"];?>" id="reservation-id" name="reservation-id" <?php echo $this->scope["disabled"];?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email_id" class="col-md-3 control-label">Booked Date:</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" value="<?php echo $this->scope["requestedDate"];?>" id="requested-date" name="requested-date" <?php echo $this->scope["disabled"];?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="room" class="col-md-3 control-label">Room Booked</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" value="<?php echo $this->scope["roomSelected"];?>" id="room" name="room" <?php echo $this->scope["disabled"];?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="adults" class="col-md-3 control-label">Adults</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" value="<?php echo $this->scope["adults"];?>" id="adults" name="adults" <?php echo $this->scope["disabled"];?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="children" class="col-md-3 control-label">Children</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" value="<?php echo $this->scope["children"];?>" id="actual_children" name="children" <?php echo $this->scope["disabled"];?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="check_in" class="col-md-3 control-label">Check In</label>
                                    <div class="col-md-6">
                                        <input name="check_in" class="form-control" id="check_in" type="text" value="<?php echo $this->scope["checkIn"];?>" <?php echo $this->scope["disabled"];?>/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="check_out" class="col-md-3 control-label">Check Out</label>
                                    <div class="col-md-6">
                                        <input name="check_out" class="form-control" id="check_out" type="text" value="<?php echo $this->scope["checkOut"];?>" <?php echo $this->scope["disabled"];?>/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="stayNights" class="col-md-3 control-label">Night Stay(s)</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" id="stayNights" name="stayNights" value="<?php echo $this->scope["nightStays"];?>" <?php echo $this->scope["disabled"];?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="total-amount" class="col-md-3 control-label">Total Amount</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" value="<?php echo $this->scope["totalAmount"];?>" data-val="false" id="total-amount" name="total-amount" <?php echo $this->scope["disabled"];?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="paid-amount" class="col-md-3 control-label">Advance Paid</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" value="<?php echo $this->scope["advancePaid"];?>" data-val="false" id="paid-amount" name="paid-amount" <?php echo $this->scope["disabled"];?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="balance-amount" class="col-md-3 control-label">Balance to be paid</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" value="<?php echo $this->scope["balanceToBePaid"];?>" data-val="false" id="balance-amount" name="balance-amount"
                                            <?php echo $this->scope["disabled"];?>>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4 col-md-offset-3">
                                    <a href="./myReservations.php?type=opt-filter-new" class="btn btn-block btn-submit">Ok</a>
                                        <!-- <input type="submit" class="btn btn-block btn-submit"  value="<?php echo $this->scope["checkActionButton"];?>" /> -->
                                    </div>
                                </div>
                            </div>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>