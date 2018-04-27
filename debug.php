<?php 
require 'core/init.php';

echo phpinfo();
//public static function ReservationConfirmed($recipient, $checkInDate, $checkOutDate, $adults, $children, $roomType, $totalAmount, $advancePaid
    echo Email::ReservationConfirmed('jackefferson@gmail.com', '2017-01-01', '2017-05-01', 2, 1, 'fuck', 2123, 123);

?>