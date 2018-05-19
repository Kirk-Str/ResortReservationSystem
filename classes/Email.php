<?php

require_once  $_SERVER['DOCUMENT_ROOT']  . '/core/init.php';
//require 'core/init.php';

class Email{

    private static $_senderEmail;
    private static $_emailConfirmationMessage;

    public static function initialize(){

        self::$_senderEmail = Config::get('sender_email');
        $_emailConfirmationMessage = '';

    }

    public static function OfferRequestSent($recipient, $checkInDate, $checkOutDate, $guests, $notes){


        self::initialize();

        $subject = 'Reservation Confirmation - Orca Beach Resort, Ltd.';

        $summary = '';
        $mainContent = '';
        $subContent = '';

        $core = new Dwoo\Core();

        // Load a template file, this is reusable if you want to render multiple times the same template with different data
        $generalEmailTemplate = new Dwoo\Template\File('./layouts/template/_emailTemplateGeneral.tpl');
        $mainContentEmailTemplate = new Dwoo\Template\File('./layouts/template/_emailTemplateMainContentReservation.tpl');
        $subContentEmailTemplate = new Dwoo\Template\File('./layouts/template/_emailTemplateSubContentReservation.tpl');

        $mainPageData = new Dwoo\Data();
        $mainContentPageData = new Dwoo\Data();
        $SubContentPageData = new Dwoo\Data();


        $guestName = '';
        $reservationId = '';
        $checkInDate = '';
        $checkOutDate = '';
        $noNightsStay = '';
        $adults = '';
        $children = '';
        $roomType = '';
        $totalAmount = '';
        $paidAmount = '';
        $balanceAmount = '';
        $roomRate = '';

        $mainContentPageData->assign('guest_name', $guestName);
        $mainContentPageData->assign('reservation_id', $reservationId);
        $mainContentPageData->assign('check_in_date', $checkInDate);
        $mainContentPageData->assign('check_out_date', $checkOutDate);
        $mainContentPageData->assign('no_nights_stay', $noNightsStay);
        $mainContentPageData->assign('adults', $adults);
        $mainContentPageData->assign('children', $children);
        $mainContentPageData->assign('room_type', $roomType);
        $mainContentPageData->assign('total_amount', $totalAmount);
        $mainContentPageData->assign('paid_amount', $paidAmount);
        $mainContentPageData->assign('balance_amount', $balanceAmount);
        $mainContentPageData->assign('room_rate', $roomRate);

        $summary = 'Summary';
        
        $mainContent = $core->get($mainContentEmailTemplate, $mainContentPageData);
         
        $subContent = $core->get($subContentEmailTemplate);
       
        $mainPageData->assign('summary', $summary);
        $mainPageData->assign('main_content', $mainContent);
        $mainPageData->assign('sub_content', $subContent);

        //echo $core->get($generalEmailTemplate, $mainPageData);

        $retVal = self::FormatEmail(self::$_senderEmail, $recipient, $subject, $summary, $mainContent, $subContent);

        if($retVal){
            return true;
        }else{
            return self::$_emailConfirmationMessage;
        }

    }

    public static function RoomReservationConfirmed($emailDataBundle){


        self::initialize();

        $subject = 'Reservation Confirmation - Orca Beach Resort, Ltd.';

        $summary = '';
        $mainContent = '';
        $subContent = '';

        $core = new Dwoo\Core();

        // Load a template file, this is reusable if you want to render multiple times the same template with different data
        // $generalEmailTemplate = new Dwoo\Template\File('./layouts/template/_emailTemplateGeneral.tpl');
        // $mainContentEmailTemplate = new Dwoo\Template\File('./layouts/template/_emailTemplateMainContentReservation.tpl');
        // $subContentEmailTemplate = new Dwoo\Template\File('./layouts/template/_emailTemplateSubContentReservation.tpl');


        echo Config::get('application_path') . '/layouts/template/_emailTemplateMainContentReservation.tpl';
        //$generalEmailTemplate = new Dwoo\Template\File(Config::get('application_path') . '/layouts/template/_emailTemplateGeneral.tpl');
        $mainContentEmailTemplate = new Dwoo\Template\File($_SERVER['DOCUMENT_ROOT'] . '/layouts/template/_emailTemplateMainContentReservation.tpl');
        $subContentEmailTemplate = new Dwoo\Template\File($_SERVER['DOCUMENT_ROOT'] . '/layouts/template/_emailTemplateSubContentReservation.tpl');


        $mainPageData = new Dwoo\Data();
        $mainContentPageData = new Dwoo\Data();
        $SubContentPageData = new Dwoo\Data();


        $recipient =  'effersonjack@gmail.com';//$emailDataBundle['email_id'];
        $guestName = 'Jack Efferson'; // $emailDataBundle['firstname'] . ' ' . $emailDataBundle['lastname'];
        $reservationId = '';
        $checkInDate = '';
        $checkOutDate = '';
        $noNightsStay = '';
        $adults = '';
        $children = '';
        $roomType = '';
        $totalAmount = '';
        $paidAmount = '';
        $balanceAmount = '';
        $roomRate = '';

        $mainContentPageData->assign('guest_name', $guestName);
        $mainContentPageData->assign('reservation_id', $reservationId);
        $mainContentPageData->assign('check_in_date', $checkInDate);
        $mainContentPageData->assign('check_out_date', $checkOutDate);
        $mainContentPageData->assign('no_nights_stay', $noNightsStay);
        $mainContentPageData->assign('adults', $adults);
        $mainContentPageData->assign('children', $children);
        $mainContentPageData->assign('room_type', $roomType);
        $mainContentPageData->assign('total_amount', $totalAmount);
        $mainContentPageData->assign('paid_amount', $paidAmount);
        $mainContentPageData->assign('balance_amount', $balanceAmount);
        $mainContentPageData->assign('room_rate', $roomRate);

        $summary = 'Summary';
        
        $mainContent = $core->get($mainContentEmailTemplate, $mainContentPageData);
         
        $subContent = $core->get($subContentEmailTemplate);
       
        $mainPageData->assign('summary', $summary);
        $mainPageData->assign('main_content', $mainContent);
        $mainPageData->assign('sub_content', $subContent);

        //echo $core->get($generalEmailTemplate, $mainPageData);

        $retVal = self::FormatEmail(self::$_senderEmail, $recipient, $subject, $summary, $mainContent, $subContent);

        if($retVal){
            return true;
        }else{
            return self::$_emailConfirmationMessage;
        }

    }

    public static function RoomCheckoutAndBilling($recipient, $checkInDate, $checkOutDate, $adults, $children, $roomType, $totalAmount, $advancePaid){


        self::initialize();

        $subject = 'Reservation Confirmation - Orca Beach Resort, Ltd.';

        $summary = '';
        $mainContent = '';
        $subContent = '';

        $core = new Dwoo\Core();
        echo Config::get('application_path');
        // Load a template file, this is reusable if you want to render multiple times the same template with different data
        $generalEmailTemplate = new Dwoo\Template\File(Config::get('application_path') . '/layouts/template/_emailTemplateGeneral.tpl');
        $mainContentEmailTemplate = new Dwoo\Template\File(Config::get('application_path') . '/layouts/template/_emailTemplateMainContentReservation.tpl');
        $subContentEmailTemplate = new Dwoo\Template\File(Config::get('application_path') . '/layouts/template/_emailTemplateSubContentReservation.tpl');

        $mainPageData = new Dwoo\Data();
        $mainContentPageData = new Dwoo\Data();
        $SubContentPageData = new Dwoo\Data();

        $guestName = '';
        $reservationId = '';
        $checkInDate = '';
        $checkOutDate = '';
        $noNightsStay = '';
        $adults = '';
        $children = '';
        $roomType = '';
        $totalAmount = '';
        $paidAmount = '';
        $balanceAmount = '';
        $roomRate = '';

        $mainContentPageData->assign('guest_name', $guestName);
        $mainContentPageData->assign('reservation_id', $reservationId);
        $mainContentPageData->assign('check_in_date', $checkInDate);
        $mainContentPageData->assign('check_out_date', $checkOutDate);
        $mainContentPageData->assign('no_nights_stay', $noNightsStay);
        $mainContentPageData->assign('adults', $adults);
        $mainContentPageData->assign('children', $children);
        $mainContentPageData->assign('room_type', $roomType);
        $mainContentPageData->assign('total_amount', $totalAmount);
        $mainContentPageData->assign('paid_amount', $paidAmount);
        $mainContentPageData->assign('balance_amount', $balanceAmount);
        $mainContentPageData->assign('room_rate', $roomRate);

        $summary = 'Summary';
        
        $mainContent = $core->get($mainContentEmailTemplate, $mainContentPageData);
         
        $subContent = $core->get($subContentEmailTemplate);
       
        $mainPageData->assign('summary', $summary);
        $mainPageData->assign('main_content', $mainContent);
        $mainPageData->assign('sub_content', $subContent);

        //echo $core->get($generalEmailTemplate, $mainPageData);

        $retVal = self::FormatEmail(self::$_senderEmail, $recipient, $subject, $summary, $mainContent, $subContent);

        if($retVal){
            return true;
        }else{
            return self::$_emailConfirmationMessage;
        }

    }

    public static function FormatEmail($sender, $recipient , $subject, $summary, $mainContent, $subContent){

        // Create the controller, it is reusable and can render multiple templates
        $core = new Dwoo\Core();

        // Load a template file, this is reusable if you want to render multiple times the same template with different data
        $generalEmailTemplate = new Dwoo\Template\File($_SERVER['DOCUMENT_ROOT'] . '/layouts/template/_emailTemplateGeneral.tpl');

        $mainPage = new Dwoo\Data();
        $mainPage->assign('summary', $summary);
        $mainPage->assign('main_content', $mainContent);
        $mainPage->assign('sub_content', $subContent);

        $message = $core->get($generalEmailTemplate, $mainPage);
        
        $header = "From:$sender \r\n";
        //$header .= "Cc:afgh@somedomain.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        return self::Send($header, $recipient, $subject, $message);

    }

    private static function Send($header, $recipient, $subject, $message){

        $retVal = mail($recipient, $subject, $message, $header);

        if($retVal){
            return true;
        }else{
            return false;
        }

    }
}

?>