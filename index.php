<?php
require_once 'helpers.php';
require_once 'config.php';
require_once 'functions.php';
require_once 'dbConfig.php';
require_once 'sql_requests.php';

$is_auth = rand(0, 1);
$categories = get_categories($con);
$lots = get_lots($con);

$page_content = include_template('main.php', ['categories' => $categories, 'lots' => $lots ]);
print (include_template('layout.php', ['categories' => $categories, 'is_auth' =>$is_auth, 'main_content' =>$page_content, 'user_name' => 'Mansur', 'title' => 'Главная']));

