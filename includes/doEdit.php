<?php
require_once 'connection.php';
$update = "UPDATE
`page`
SET
`slug` = :slug,
`title` = :title,
`h1` = :h1,
`p` = :p,
`span-class` = :spanClass,
`span-text` = :spanText,
`img-alt` = :imgAlt,
`img-src` = :imgSrc,
`nav-title` = :navTitle
WHERE
`id` = :id
;";
$stmt = $pdo->prepare($update);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':slug', $_POST['slug']);
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':h1', $_POST['h1']);
$stmt->bindValue(':p', $_POST['p']);
$stmt->bindValue(':spanClass', $_POST['span-class']);
$stmt->bindValue(':spanText', $_POST['span-text']);
$stmt->bindValue(':imgAlt', $_POST['img-alt']);
$stmt->bindValue(':imgSrc', $_POST['img-src']);
$stmt->bindValue(':navTitle', $_POST['nav-title']);
$stmt->execute();
header('Location: show.php');