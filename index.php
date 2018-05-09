<?php
require_once "includes/connection.php";
require_once "includes/functions.php";
define('APP_DEFAULT_PAGE', 'el-miedo-de-los-teletubbies');
define('APP_PAGE_PARAM', 'page');
define('APP_URL_BASE', 'index.php?');
//require_once "includes/contentArray.php";
/**
 * @ref http://php.net/manual/fr/function.http-response-code.php
 */
// gestion de la page par defaut (pas de param page= dans l'url
// gestion de la page appelee (param page=)
$pageKey = $_GET[APP_PAGE_PARAM] ?? APP_DEFAULT_PAGE;
// get the page data from the database
try {
    $page = getPageContent($pdo, $pageKey);
    // gestion de l'affichage de la page par defaut si la page appelee n'existe pas (avec le status 404 http)
    if (is_null($page)) {
        // recuperation de la page par defaut
        http_response_code(404);
        $page = getPageContent($pdo, APP_DEFAULT_PAGE);
    }
} catch(\Exception $exception) {
    die("Ze pache you zearched vor iz not prezent");
}
include "includes/header.php";
// factorisied the content display
displayPage($page);
include "includes/footer.php";
