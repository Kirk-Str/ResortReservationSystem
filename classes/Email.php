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

    //Send email on User Account registration
    public static function UserAccountRegistrationConfirmation($reservationId){


        self::initialize();

        $subject = 'User Account Registration - Orca Beach Resort, Ltd.';

        $summary = '';
        $mainContent = '';
        $subContent = '';

        $core = new Dwoo\Core();

        $mainContentEmailTemplate = new Dwoo\Template\File($_SERVER['DOCUMENT_ROOT'] . '/layouts/template/_emailTemplateMainContentReservation.tpl');
        $subContentEmailTemplate = new Dwoo\Template\File($_SERVER['DOCUMENT_ROOT'] . '/layouts/template/_emailTemplateSubContentReservation.tpl');


        $mainPageData = new Dwoo\Data();
        $mainContentPageData = new Dwoo\Data();
        $SubContentPageData = new Dwoo\Data();


        $summary = 'Welcome to Orca Beach Resort';
        
        $mainContent = $core->get($mainContentEmailTemplate, $mainContentPageData);
            
        $subContent = $core->get($subContentEmailTemplate);
        
        $mainPageData->assign('summary', $summary);
        $mainPageData->assign('main_content', $mainContent);
        $mainPageData->assign('sub_content', $subContent);

        $retVal = self::FormatEmail(self::$_senderEmail, $recipient, $subject, $summary, $mainContent, $subContent);

        if($retVal){
            return true;
        }else{
            return self::$_emailConfirmationMessage;
        }

    }

    public static function OfferRequestSent($requestId){


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

        $request = new Request();
        $emailDataBundle = $request->find($requestId);

        $guestName = $emailDataBundle->firstname . ' ' . $emailDataBundle->lastname;
        $requestId = $emailDataBundle->request_Id;
        $startDate = $emailDataBundle->event_start_date;
        $endDate = $emailDataBundle->event_end_date;
        $guests = $emailDataBundle->guests;
        $additionalRequest = '';

        $mainContentPageData->assign('guest_name', $guestName);
        $mainContentPageData->assign('request_id', $requestId);
        $mainContentPageData->assign('start_date', $startDate);
        $mainContentPageData->assign('end_date', $endDate);
        $mainContentPageData->assign('guests', $guests);
        $mainContentPageData->assign('additional_request', $additionalRequest);

        $summary = 'Summary';
        
        $mainContent = $core->get($mainContentEmailTemplate, $mainContentPageData);
         
        $subContent = 'The request has been sent for approval. One of our representative will get back to you shortly.';
       
        $mainPageData->assign('summary', $summary);
        $mainPageData->assign('main_content', $mainContent);
        $mainPageData->assign('sub_content', $subContent);

        $retVal = self::FormatEmail(self::$_senderEmail, $recipient, $subject, $summary, $mainContent, $subContent);

        if($retVal){
            return true;
        }else{
            return self::$_emailConfirmationMessage;
        }

    }


    //Send email on booking
    public static function RoomReservationConfirmed($reservationId){


        self::initialize();

        $subject = 'Reservation Confirmation - Orca Beach Resort, Ltd.';

        $summary = '';
        $mainContent = '';
        $subContent = '';

        $core = new Dwoo\Core();

        $mainContentEmailTemplate = new Dwoo\Template\File($_SERVER['DOCUMENT_ROOT'] . '/layouts/template/_emailTemplateMainContentReservation.tpl');
        $subContentEmailTemplate = new Dwoo\Template\File($_SERVER['DOCUMENT_ROOT'] . '/layouts/template/_emailTemplateSubContentReservation.tpl');


        $mainPageData = new Dwoo\Data();
        $mainContentPageData = new Dwoo\Data();
        $SubContentPageData = new Dwoo\Data();


        $reservation = new Reservation();
        $emailDataBundle = $reservation->find($reservationId);

        $check_in = new DateTime($emailDataBundle->check_in);
        $check_out = new DateTime($emailDataBundle->check_out);
        $nightStay = $check_in->diff($check_out)->format('%a')+1;

        $recipient =  $emailDataBundle->email_id;

        $mainContentPageData->assign('guest_name', $emailDataBundle->firstname . ' ' . $emailDataBundle->lastname);
        $mainContentPageData->assign('reservation_id', $emailDataBundle->reservation_id);
        $mainContentPageData->assign('check_in_date', $emailDataBundle->check_in);
        $mainContentPageData->assign('check_out_date', $emailDataBundle->check_out);
        $mainContentPageData->assign('no_nights_stay', $nightStay);
        $mainContentPageData->assign('adults', $emailDataBundle->adults);
        $mainContentPageData->assign('children', $emailDataBundle->children);
        $mainContentPageData->assign('room_type', $emailDataBundle->room_name);
        $mainContentPageData->assign('total_amount', $emailDataBundle->total_amount);
        $mainContentPageData->assign('paid_amount', $emailDataBundle->deposit_amount);
        $mainContentPageData->assign('balance_amount', $emailDataBundle->balance_amount);
        $mainContentPageData->assign('room_rate', $emailDataBundle->rate);

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



    // Baseline Functions //

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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