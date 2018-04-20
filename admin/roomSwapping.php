<?php
// Include the main class, the rest will be automatically loaded
require_once  $_SERVER['DOCUMENT_ROOT']  . '/core/init.php';

if($userType != 1 || empty(Input::get('reservationId'))){

    clearMessage();
    
    Redirect::to('../message.php');

}

$request_type;
$pageTitle;
$row;
$roomRows;
$buttonName;
$reservationId = Input::get('reservationId');

$contentData = new Dwoo\Data();

$contentData->assign('id', '');
$contentData->assign('door_id', '');
$contentData->assign('door_no', '');
$contentData->assign('room_status', '');
$contentData->assign('vacant', '');
$contentData->assign('occupied', '');
$contentData->assign('dirty', '');


$pageTitle = "ADD NEW ROOM";
$buttonName = "Save";

$room = new RoomAllocation();
$roomRows = $room->selectAll();

$contentData->assign('roomTypeList', objectToArray($roomRows));  
$contentData->assign('id', $id);
$contentData->assign('current_room_name', $row->room_id);
$contentData->assign('current_room_no', $row->room_name);
//$contentData->assign('new_room_no', $row->door_no);


$contentData->assign('pageTitle', $pageTitle);
$contentData->assign('buttonName', $buttonName);

// Create the controller, it is reusable and can render multiple templates
$core = new Dwoo\Core();

// Load a template file, this is reusable if you want to render multiple times the same template with different data
$roomdetailTemplate = new Dwoo\Template\File('../layouts/roomSwapping.tpl');
$footerTemplate = new Dwoo\Template\File('../layouts/template/_footer.tpl');
$scriptTemplate = new Dwoo\Template\File('../layouts/template/_scripts.tpl');
$validationScriptTemplate = new Dwoo\Template\File('../layouts/template/_validationScripts.tpl');
$layoutTemplate = new Dwoo\Template\File('../layouts/template/_layout.tpl');

// Create a data set, this data set can be reused to render multiple templates if it contains enough data to fill them all
$validationScriptPage = new Dwoo\Data();
$validationScriptPage->assign('validationScripts', $core->get($validationScriptTemplate));

$mainPage = new Dwoo\Data();
$mainPage->assign('pageTitle', $pageTitle);
$mainPage->assign('userType', $userType);
$mainPage->assign('username', strtoupper($username));
$mainPage->assign('avatar', $avatar);
$mainPage->assign('content', $core->get($roomdetailTemplate, $contentData));
$mainPage->assign('footer', $core->get($footerTemplate));
$mainPage->assign('scripts', $core->get($scriptTemplate, $validationScriptPage));


echo $core->get($layoutTemplate, $mainPage);

?>