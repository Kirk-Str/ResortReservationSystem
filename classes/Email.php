<?php

require 'core/init.php';

class Email{

    private static $_senderEmail;
    private static $_emailConfirmationMessage;

    public static function initialize(){

        self::$_senderEmail = Config::get('sender_email');
        $_emailConfirmationMessage = '';

    }

    public static function ReservationConfirmed($recipient, $checkInDate, $checkOutDate, $adults, $children, $roomType, $totalAmount, $advancePaid){


        self::initialize();

        $subject = 'Reservation Confirmation - Orca Beach Resort, Ltd.';

        $summary = '';
        $mainContent = '';
        $subContent = '';

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
        $generalEmailTemplate = new Dwoo\Template\File('./layouts/template/_templateGeneral.tpl');

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