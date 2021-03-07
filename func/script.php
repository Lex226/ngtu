<?php

ini_set("xdebug.var_display_max_children", -1);
ini_set("xdebug.var_display_max_data", -1);
ini_set("xdebug.var_display_max_depth", -1);
require_once "Core.php";
require_once __DIR__. "/../designer/Designer.php";

$core = new Core();
$display = new Designer();
////////////////////////////////////////////////////////////////////
$mainMenuItems = $core->getMainFolders();
$navMenuItems = $core->getNavFolders();
////////////////////////////////////////////////////////////////////
$head = $display->getHeadContents();
$mainMenu = $display->getMainMenuContents($mainMenuItems);
$navMenu = $display->getNavContents($navMenuItems);
$center = $display->getCenterContents();
////////////////////////////////////////////////////////////////////
ob_start();
foreach ($head as $row) {
    echo $row;
}
foreach ($mainMenu as $row) {
    echo $row;
}
foreach ($navMenu as $row) {
    echo $row;
}
foreach ($center as $row) {
    echo $row;
}
//var_dump($html);
//<!--    <html>-->
//<!--    <head>-->
//<!--        <style>-->
//<!--        </style>-->
//<!--    </head>-->
//<!--    <body>-->
//<!--    <p>It's like comparing apples to oranges.</p>-->
//<!--    </body>-->
//<!--    </html>-->

ob_end_flush();