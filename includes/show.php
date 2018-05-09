<?php
require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/formulaire.css">
    <link rel="stylesheet" href="css/test1.css">
    <title>SHOW</title>
</head>
<body>
<?php
$total =" SELECT         
           `id`, `slug`, `title`, `h1`, `p`, `span-class`, `span-text`, `img-alt`, `img-src`, `nav-title`
           FROM
            `page`
            
            ;"; /* on  recupere les donnée id competence intitulé resume dateStart et datefinish de tableau Mysql 'anonce'*/
$stmt = $pdo->prepare($total);
$stmt->execute();
?>
<h1 class="annonce-titre">Tout les post</h1>
<section class="container-annonce">
    <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
        <div class="annonce">
            <div class="flex">
                <p>SLUG :</p>
                <p class="licorne2"><?=$row["slug"]?></p> <!- on affiche la valeur intitulé qu'on a prealablement racuperer ->
            </div>
            <div class="flex">
                <p>title :</p>
                <p class="licorne2"><?=$row["title"]?></p> <!- on affiche la valeur intitulé qu'on a prealablement racuperer ->
            </div>
            <div class="flex">
                <p>h1 :</p>
                <p class="licorne2"><?=$row["h1"]?></p> <!- on affiche la valeur intitulé qu'on a prealablement racuperer ->
            </div>
            <div class="flex">
                <p>p :</p>
                <p class="licorne2"><?=$row["p"]?></p> <!- on affiche la valeur intitulé qu'on a prealablement racuperer ->
            </div>
            <div class="flex">
                <p>Span-class :</p>
                <p class="licorne2"><?=$row["span-class"]?></p> <!- on affiche la valeur intitulé qu'on a prealablement racuperer ->
            </div>
            <div class="flex">
                <p>SLUG :</p>
                <p class="licorne2"><?=$row["span-text"]?></p> <!- on affiche la valeur intitulé qu'on a prealablement racuperer ->
            </div>
            <div class="flex">
                <p>SLUG :</p>
                <p class="licorne2"><?=$row["img-alt"]?></p> <!- on affiche la valeur intitulé qu'on a prealablement racuperer ->
            </div>
            <div class="flex">
                <p>paragraphe : </p>
                <p class="licorne1"><?=$row["p"]?></p><!- on affiche la valeur resume qu'on a prealablement racuperer ->
                <img src="<?=$row["img-src"]?>" alt="<?=$row["img-alt"]?>">
            </div>
            <div class="flex">
                <p></p>
                <p class="licorne"><?=$row["span-text"]?></p>   <!- on affiche la valeur competence qu'on a prealablement racuperer ->
            </div>
            <div class="flex">
                <p>Span-class :</p>
                <p class="licorne2"><?=$row["span-class"]?></p> <!- on affiche la valeur intitulé qu'on a prealablement racuperer ->
            </div>
        </div>
        <a href="edit.php?id=<?=$row["id"]?>">modifié</a>
        <a href="delete.php?id=<?=$row["id"]?>">suprimé</a>
    <?php endwhile;?> <!- on ferme la balise php et on fini la condition tant que ->
</section>
</body>
