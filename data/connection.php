<?php 
include_once(CLASSPAGE."class.upload.php");
include_once(CLASSPAGE."DB.php");
$DB = new DB();

$settings = $DB->CallData("settings","WHERE ID=?",array(1),"ORDER BY ID ASC",1);
if($settings!=false) {
    $webtitle=$settings[0]["title"];
    $webseo=$settings[0]["seo"];
    $webdescription=$settings[0]["description"];
    $weburl=$settings[0]["url"];
    $phone=$settings[0]["phone"];
    $mail=$settings[0]["mail"];
    $adress=$settings[0]["adress"];
    $fax=$settings[0]["fax"];

}


?>