<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 07/06/17
 * Time: 12:30
 */

require_once 'webpage.class.php';

function navbar()
{
    $html = new WebPage();
    $html->appendToHead('<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">');

    $navbar = <<<HTML

  <nav class="blue-grey">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo center"><img class="responsive-img hide-on-med-and-down" src="http://www.everycheats.tk/img/logo.png" alt="logo"></a>
      <a href="#!"><img class="responsive-img brand-logo center hide-on-large-only" src="http://www.everycheats.tk/img/logo.png" alt="logo"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li class="green"><a href="index.php"><p>Accueil</p></a></li>
        <li class="blue"><a href="cheats.php"><p>Cheats minecraft</p></a></li>
        <li class="yellow"><a href="contact.php"><p>Contact</p></a></li>
        <li class="red"><a href="http://youtube.com/user/aexcraft"><p>Youtube</p></a></li>
      </ul>
      <ul class="side-nav blue-grey" id="mobile-demo">
        <li class="green"><a href="index.php">Accueil</a></li>
        <li class="blue"><a href="cheats.php">Cheats minecraft</a></li>
        <li class="yellow"><a href="contact.php">Contact</a></li>
        <li class="red"><a href="http://youtube.com/user/aexcraft">Youtube</a></li>
      </ul>
    </div>
  </nav>
          
HTML;


    $html->appendContent($navbar);

    return $html->toHTML();
}