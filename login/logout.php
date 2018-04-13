<?php

include_once("../includes/header_admin.php");
session_destroy();
header("location:".app_path."login");
?>