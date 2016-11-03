<?php
include "Zend/Amf/Server.php";
include "Services/PushNotificationService.php";

include "VO/VOVirus.php";
include "VO/VODefinitionUpdate.php";

$server = new Zend_Amf_Server();
$server -> setClass( "PushNotificationService" );

echo( $server -> handle() );

?>