<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 07/06/17
 * Time: 12:39
 */

require_once 'webpage.class.php';
require_once 'navbar.php';
require_once 'footer.php';

$html = new WebPage('Bienvenue sur CheatUniverse');

$html->appendCssUrl('materialize/css/materialize.css');

$nav = navbar();
$foot = footer();

$contact =<<<HTML
<main class="valign-wrapper blue-grey lighten-4">
    <div class="valign-wrapper">
        <div class="row">
        <div class="col l6 offset-l3 m6 offset-m3 s6"><div class="col s4">
            <a href="https://discord.gg/pKemS7j"><img src="img/Discord.png" class="circle responsive-img"></a>
          </div>
          <div class="col s4">
            <a href="https://twitter.com/aexos1"><img src="img/twitter.png" class="circle responsive-img"></a>
          </div>
          <div class="col s4">
            <a href="https://ask.fm/aexos"><img src="img/askfm.svg" class="circle responsive-img"></a>
          </div></div>
          
    </div>
</main>
HTML;


$html->appendContent($nav.$contact.$foot);

$html->appendJsUrl('https://code.jquery.com/jquery-2.1.1.min.js');
$html->appendJsUrl('materialize/js/materialize.js');
$html->appendContent('<script>$(".button-collapse").sideNav();</script>');

echo $html->toHTML();