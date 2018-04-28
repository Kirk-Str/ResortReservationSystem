<?php 
require 'core/init.php';
//public static function ReservationConfirmed($recipient, $checkInDate, $checkOutDate, $adults, $children, $roomType, $totalAmount, $advancePaid
    echo Email::ReservationConfirmed('kamalraj@bluechip-comp.com', '2017-01-01', '2017-05-01', 2, 1, 'test', 2123, 123);

?>