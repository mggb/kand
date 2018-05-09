
<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 24/11/2017
 * Time: 12:08
 */
if (!isset($_POST['id'])) {
    header("Location: index.php?error=noidtodelete");
    exit;
}
require_once "connection.php";
$delete = "DELETE FROM 
  `page` 
WHERE 
  `id` = :id
;";
$stmt = $pdo->prepare($delete);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
header('Location: indew.php');
errorHandler($stmt);
header("Location: index.php");