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
$html->appendCssUrl('materialize/css/index.css');

$nav = navbar();


$html->appendContent("{$nav}<main class='valign-wrapper center'></main><footer class=\"page-footer transparent hide-on-med-and-down\">
          <div class=\"footer-copyright blue-grey\">
            <div class=\"container\">
                <div class=\"col m12 s12\">
                    <div class=\"col m6 s6\">
                        <a class=\"grey-text text-lighten-4 left\" href=\"https://discord.gg/pKemS7j\"><h2>Discord</h2></a>
                    </div>
                    <div class=\"col m6 s6\">
                        <a class=\"grey-text text-lighten-4 right\" href=\"https://youtube.com/user/aexcraft\"><h2 class=\"red-text\">Youtube channel</h2></a>
                    </div>
                </div>
            </div>
          </div>
        </footer>
        <footer class=\"page-footer transparent hide-on-large-only hide-on-small-and-down\">
          <div class=\"footer-copyright blue-grey\">
            <div class=\"container\">
                <div class=\"col m12 s12\">
                    <div class=\"col m6 s6\">
                        <a class=\"grey-text text-lighten-4 left\" href=\"https://discord.gg/pKemS7j\"><h3>Discord</h3></a>
                    </div>
                    <div class=\"col m6 s6\">
                        <a class=\"grey-text text-lighten-4 right\" href=\"https://youtube.com/user/aexcraft\"><h3 class=\"red-text\">Youtube channel</h3></a>
                    </div>
                </div>
            </div>
          </div>
        </footer>
        <footer class=\"page-footer  transparent hide-on-med-and-up\">
          <div class=\"footer-copyright blue-grey\">
            <div class=\"container\">
                <div class=\"col m12 s12\">
                    <div class=\"col m6 s6\">
                        <a class=\"grey-text text-lighten-4 left\" href=\"https://discord.gg/pKemS7j\"><h5>Discord</h5></a>
                    </div>
                    <div class=\"col m6 s6\">
                        <a class=\"grey-text text-lighten-4 right\" href=\"https://youtube.com/user/aexcraft\"><h5 class=\"red-text\">Youtube channel</h5></a>
                    </div>
                </div>
            </div>
          </div>
        </footer>");

$html->appendJsUrl('https://code.jquery.com/jquery-2.1.1.min.js');
$html->appendJsUrl('materialize/js/materialize.js');
$html->appendContent('<script>$(".button-collapse").sideNav();</script>');

echo $html->toHTML();