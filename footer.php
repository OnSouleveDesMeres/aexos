<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 07/06/17
 * Time: 12:58
 */

require_once 'webpage.class.php';


function footer(){

$html = new WebPage();

$html->appendCssUrl('materialize/css/materialize.css');

$footer =<<<HTML

        <footer class="page-footer blue-grey lighten-4 hide-on-med-and-down">
          <div class="footer-copyright blue-grey">
            <div class="container">
                <div class="col m12 s12">
                    <div class="col m6 s6">
                        <a class="grey-text text-lighten-4 left" href="https://discord.gg/pKemS7j"><h2>Discord</h2></a>
                    </div>
                    <div class="col m6 s6">
                        <a class="grey-text text-lighten-4 right" href="https://youtube.com/user/aexcraft"><h2 class="red-text">Youtube channel</h2></a>
                    </div>
                </div>
            </div>
          </div>
        </footer>
        <footer class="page-footer blue-grey lighten-4 hide-on-large-only hide-on-small-and-down">
          <div class="footer-copyright blue-grey">
            <div class="container">
                <div class="col m12 s12">
                    <div class="col m6 s6">
                        <a class="grey-text text-lighten-4 left" href="https://discord.gg/pKemS7j"><h3>Discord</h3></a>
                    </div>
                    <div class="col m6 s6">
                        <a class="grey-text text-lighten-4 right" href="https://youtube.com/user/aexcraft"><h3 class="red-text">Youtube channel</h3></a>
                    </div>
                </div>
            </div>
          </div>
        </footer>
        <footer class="page-footer blue-grey lighten-4 hide-on-med-and-up">
          <div class="footer-copyright blue-grey">
            <div class="container">
                <div class="col m12 s12">
                    <div class="col m6 s6">
                        <a class="grey-text text-lighten-4 left" href="https://discord.gg/pKemS7j"><h5>Discord</h5></a>
                    </div>
                    <div class="col m6 s6">
                        <a class="grey-text text-lighten-4 right" href="https://youtube.com/user/aexcraft"><h5 class="red-text">Youtube channel</h5></a>
                    </div>
                </div>
            </div>
          </div>
        </footer>
            
HTML;

$html->appendContent($footer);


$html->appendJsUrl('https://code.jquery.com/jquery-2.1.1.min.js');
$html->appendJsUrl('materialize/js/materialize.js');

return $html->toHTML();
}