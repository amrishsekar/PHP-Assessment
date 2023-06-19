<?php

require 'router.php';

$server = new router();

$server->post("/","main");
$server->post("/create", "create");
$server->post("/edit","edit");
$server->post("/update","update");
$server->post("/delete","delete");
$server->route();