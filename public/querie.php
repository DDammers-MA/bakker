<?php

$page_id  = $_GET['id'];

// MySQLi
$conn     = new mysqli($servername, $username, $password, $dbname);
$sql      = 'SELECT * FROM products WHERE id=' . $page_id;
$result   = $conn->query($sql);
$item     = $result->fetch_assoc();

// prepare and bind
$page_id   = $_GET['id'];
$pre_sql   = $conn->prepare('SELECT * FROM products WHERE id=?');
$pre_sql->bind_param('i', $page_id);




