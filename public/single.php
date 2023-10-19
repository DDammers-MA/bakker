<?php

include_once "../src/config.php";

/* create a statement */
$sql = 'SELECT * 
        FROM products 
        WHERE slug=?
        ORDER BY products.title';

/* create a prepared statement */
$stmt = $mysqli->prepare($sql);

/* Bind the slug */
$slug = PRODUCT_SLUG;
$stmt->bind_param('s', $slug);

/* execute query */
$stmt->execute();

/* bind result variables */
$result = $stmt->get_result();

/**
 * Nu wil ik mijn data in een array plaatsen
 */
$product = mysqli_fetch_assoc($result);