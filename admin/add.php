<?php
require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poster un message</title>
</head>
<a href="index.php">retourner vers la page admin</a>
<a href="show.php">retourner vers la page show</a>
<div class="formulaire">
    <h2 class="title">ahhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh :</h2>
    <form  action="doAdd.php" method="post">
        <input type="text" name="slug" placeholder="Titre-nav" >
        <input type="text" name="title" placeholder="title">
        <input type="text" name="h1" placeholder="votre titre de page">
        <textarea name="p" placeholder="Votre text de page" rows="8" cols="60" ></textarea>
        <input type="text" name="span-class"  placeholder="span class" >
        <input type="text" name="span-text" placeholder="span-text" class="dateFin">
        <input type="text" name="img-alt" size="12" placeholder="img-alt">
        <input type="text" name="img-src" size="12" placeholder="img-src">
        <input type="text" name="nav-title" size="12" placeholder="nav-title">
        <input type="submit" name="submit" value="Envoyer" class="envoie">

    </form>
</div>

