<?php

require_once 'data_source/session.php';

session_destroy();
header('location: index.php');

?>