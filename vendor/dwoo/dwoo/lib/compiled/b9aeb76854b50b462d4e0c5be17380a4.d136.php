<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class="container">
    <form class="form form-inline" method="POST" action="." >
        <h3 class="inline-block">My Reservations</h3>
        <div class="form-group pull-right" style="margin-top:30px;">
            <label class="radio-inline" style="margin-right:20px;">
                <input type="radio" onclick=location.href="<?php echo $_SERVER['PHP_SELF'] . '?type=opt-filter-new'; ?>" name="opt-filter" id="opt-filter-new" <?php if (($_GET['type']) == "opt-filter-new") { echo 'checked=checked'; } ?>>New Bookings    
            </label>
            <label class="radio-inline" style="margin-right:20px;">
                <input type="radio" onclick=location.href="<?php echo $_SERVER['PHP_SELF'] . '?type=opt-filter-history'; ?>"  name="opt-filter" id="opt-filter-occupied" <?php if (($_GET['type']) == "opt-filter-history") { echo 'checked=checked'; } ?>>All History    
            </label>
        </div>
    </form>

    <table id="my-reservation-list" class="table table-hover">

        <thead>
            <tr>
                <th>Reservation Id</th>
                <th>Room</th>
                <th>Adults</th>
                <th>Children</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Night Stay(s)</th>
            </tr>
        </thead>

    <?php 
$_fh0_data = (isset($this->scope["reservationList"]) ? $this->scope["reservationList"] : null);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['row'])
	{
/* -- foreach start output */
?>

        <tr>

            <td id="<?php echo $this->scope["row"]["reservation_id"];?>"><a href="./myReservationDetail.php?requestId=<?php echo $this->scope["row"]["reservation_id"];?>"><?php echo $this->scope["row"]["reservation_id"];?></a></td>
            <td><?php echo $this->scope["row"]["room_name"];?></td>
            <td><?php echo $this->scope["row"]["adults"];?></td>
            <td><?php echo $this->scope["row"]["children"];?></td>
            <td><?php echo $this->scope["row"]["check_in"];?></td>
            <td><?php echo $this->scope["row"]["check_out"];?></td>
            <td><?php echo $this->scope["row"]["nightstays"];?></td>

        </tr>

    <?php 
/* -- foreach end output */
	}
}?>

    </table>
</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>