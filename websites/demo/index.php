<?php
require 'functions.php';
require 'Database.php';
require 'Response.php';
require 'router.php';
//require 'Database.php';
//
//$config = require('config.php');
//$db = new Database($config['database']);
//$id = $_GET['id'];
//if ($id != null) {
//    $query = "select * from posts where id = :id";
//    $posts = $db->query($query, [':id' => $id])->fetchAll();
//} else {
//    $query = "select * from posts";
//    $posts = $db->query($query)->fetchAll();
//}
//
//foreach ($posts as $post) {
//    echo "<li>" . $post['title'] . "</li>";
//}