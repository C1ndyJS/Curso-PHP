
<?php

require_once 'const.php';
require_once 'functions.php';
$data = get_data();
$until_message = get_until_message(days: $data['days_until']);

require 'sections/main.php';
require 'demo.php';
require 'sections/style.php';
?>

